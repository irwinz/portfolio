import UIkit from 'uikit';

;(function() {
   
    let projectsPage = document.querySelector('.projects');

    if (projectsPage) {
        const PATH = "http://remz.loc/wp-json/wp/v2/projects/";
        let modal = document.querySelector('.project-modal');
        modal.isReady = false;

        // Открытие модального окна с данными 

        window.addEventListener('DOMContentLoaded', setProjectListeners());

        modal.addEventListener('beforeshow', event => {
            if (modal.isReady) {
                return;
            } else {
                event.preventDefault();
            }
        })

        modal.addEventListener('beforehide', () => {
            modal.isReady = false;
        })

        function setProjectListeners() {
            let projectBtnArr = document.querySelectorAll('.js-project');
            projectBtnArr.forEach(element =>  {
                element.addEventListener('click', function(event) {
                    showProjectPopup(element);
                });
            });
        }
 
        function showProjectPopup(project) {
            let projectID = project.getAttribute('data-id');
            let projectRequest = new XMLHttpRequest();
            projectRequest.open("GET", PATH + String(projectID));
            projectRequest.send();
            projectRequest.addEventListener('readystatechange', function() {
                fillModal(projectRequest);
            });
        }
 
        function fillModal(request) {
            if (request.readyState == 4) {
                let projectData = JSON.parse(request.responseText);
                let modalTitle = document.querySelector('.project-modal__title');
                let modalDesc = document.querySelector('.project-modal__desc');
                let modalGalleryArr = [];
                let galleryContainer = document.querySelector('.uk-slideshow-items');
                galleryContainer.innerHTML = '';
                projectData.acf.project_gallery.forEach(element => {
                    modalGalleryArr.push(element.url);
                })
                modalTitle.innerHTML = projectData.title.rendered;
                modalDesc.innerHTML = projectData.content.rendered;  
                modalGalleryArr.forEach(element => {
                    galleryContainer.insertAdjacentHTML('beforeend', '<li><img src="' + element + '" alt="" uk-cover></li>');
                })
                galleryContainer.children[0].classList.add('uk-active');
                modal.isReady = true;
                UIkit.modal(modal).show();
            }
        }

        //Показать еще проекты

        let moreBtn = document.querySelector('.show-more');
        let morePageNumber = 2;
        moreBtn.addEventListener('click', getMoreProjects);
        
        function getMoreProjects() {
            let moreRequest = new XMLHttpRequest();
            moreRequest.open('GET', PATH + '?per_page=4&page=' + morePageNumber);
            moreRequest.send();
            moreRequest.addEventListener('readystatechange', function() {
                requestHandler(moreRequest);
            });
        }

        function requestHandler(request) {
            if (request.readyState == 4)  {
                let projectsArr = JSON.parse(request.responseText);
                projectsArr.forEach(element => {
                    let projectTitle = element.title.rendered;
                    let projectDesc = element.content.rendered;
                    let projectImg = element.acf.project_gallery[0].url;
                    let projectID = element.id;
                    renderProjectItem(projectTitle, projectDesc, projectImg, projectID);
                }); 
                removeMoreBtn(checkPageCount(request));
                morePageNumber++;
            }
        }

        function checkPageCount(request) {
            if (request.readyState == 4) return request.getResponseHeader('X-WP-TotalPages');
        }

        function removeMoreBtn(pageCount) {
            if (morePageNumber == pageCount) moreBtn.hidden = 'true';
        }

        function renderProjectItem(title, desc, img, id) {
            let projectItem = document.createElement('div');
            let projectItemHTML = '<div class="project-item"><div class="project-item__image uk-cover-container"><img src="' + img + '" alt="" data-uk-cover></div><div class ="project-item__desc"><div class="project-item__title">' + title + '</div><div class="project-item__text">' + desc + '</div><button class="link-more js-project" uk-toggle="target: #project" type="button" data-id="' + id + '">Подробнее</button></div></div>';
            document.querySelector('.projects__grid').appendChild(projectItem);
            projectItem.insertAdjacentHTML('afterBegin', projectItemHTML);
            setProjectListeners();
        }


    }
    
})();


