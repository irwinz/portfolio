;(function() {
    let projectsPage = document.querySelector('.projects');

    if (projectsPage) {
        let moreBtn = document.querySelector('.view-all');
        const projectsPath = "http://remz.loc/wp-json/wp/v2/projects?per_page=4&page=";
        let morePageNumber = 2;
        moreBtn.addEventListener('click', getMoreProjects);
        
        function getMoreProjects() {
            let moreRequest = new XMLHttpRequest();
            moreRequest.open('GET', projectsPath + morePageNumber);
            moreRequest.send();
            morePageNumber++;
            moreRequest.addEventListener('readystatechange', function(moreRequest) {
                requestHandler(moreRequest);
            })
        }

        function requestHandler(request) {
            if (request.readyState == 4)  {
                console.log('ura!')
                let projectsArr = JSON.parse(request.responseText);
                projectsArr.forEach(element => {
                    let projectTitle = element.title.rendered;
                    let projectDesc = element.content.rendered;
                    let projectImg = element.acf.project_gallery[0].url;
                    let projectID = element.id;
                    renderProjectItem(projectTitle, projectDesc, projectImg, projectID);
                });
            }
        }

        function renderProjectItem(title, desc, img, id) {
            let projectItem = document.createElement('div');
            let projectItemHTML = '<div class="project-item"><div class="project-item__image uk-cover-container"><img src="' + img + '" alt="" data-uk-cover></div><div class ="project-item__desc"><div class="project-item__title">' + title + '</div><div class="project-item__text">' + desc + '</div><button class="link-more js-modal-project" uk-toggle="target: #project" type="button" data-id="' + id + '">Подробнее</button></div></div>';
            document.querySelector('.projects__grid').appendChild(projectItem);
            projectItem.insertAdjacentHTML('afterBegin', projectItemHTML);

        }
    }
    
})();


