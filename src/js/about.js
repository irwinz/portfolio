;(function() {
    let projectsPage = document.querySelector('.projects');

    if (projectsPage) {
        let projectBtnArr = document.querySelectorAll('.js-modal-project');
        const projectsPath = "http://remz.loc/wp-json/wp/v2/projects/";
        projectBtnArr.forEach(element =>  {
            element.addEventListener('click', function() {
                let projectID = element.getAttribute('data-id');
                let projectRequest = new XMLHttpRequest();
                projectRequest.open("GET", projectsPath + String(projectID));
                projectRequest.send();
                projectRequest.addEventListener('readystatechange', function() {
                    if (projectRequest.readyState == 4) {
                        let projectData = JSON.parse(projectRequest.responseText);
                        let modalTitle = document.querySelector('.project-modal__title');
                        let modalDesc = document.querySelector('.project-modal__desc');
                        modalTitle.innerHTML = projectData.title.rendered;
                        modalDesc.innerHTML = projectData.content.rendered;
                        
                    }
                });  

            }); 

        });
    }
})();

