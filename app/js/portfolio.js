const works = [
    {
      id: '1',
      title: 'high-back bench',
      category: 'app develop',
      image:
        '../images/image6.jpg',
    },
    {
        id: '2',
        title: 'high-back bench',
        category: 'hubspot',
        image:
          'https://images.unsplash.com/photo-1547119957-637f8679db1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80',
      },
      {
        id: '3',
        title: 'high-back bench',
        category: 'ui/ux',
        image:
          'https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80',
      },
      {
        id: '4',
        title: 'high-back bench',
        category: 'email marketing',
        image:
          'https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
      },
      {
        id: '5',
        title: 'high-back bench',
        category: 'hubspot',
        image:
          'https://dl.airtable.com/.attachments/14ac9e946e1a02eb9ce7d632c83f742f/4fd98e64/product-1.jpeg',
      },
      {
        id: '6',
        title: 'high-back bench',
        category: 'ui/ux',
        image:
          'https://dl.airtable.com/.attachments/14ac9e946e1a02eb9ce7d632c83f742f/4fd98e64/product-1.jpeg',
      }
  ];



  let filteredWorks;
  
  const data = async () => {
    try{
        let response =  await fetch(
            `http://127.0.0.1/portfolio/projects`
        )
        let filteredWorks = await response.json();

        displayWorks = ()=>{
  
            worksContainer.innerHTML = filteredWorks.slice(0,5)
            .map((work)=>{
                const{id,title,category,image} = work;
                return `
                      <div class="work" data-id="${id}">
                      <div class="image-container">
                          <img src="data:image/webp;base64,${image.src}" alt="${image.alt}">
                      </div>
                      </div>
                      `      
            })
            .join('');
            
            }
          
            console.log(filteredWorks);
            displayWorks();
            
            const categoryDOM = document.querySelector('.category');
            
            
            const displayButtons =()=>{
                const buttons = [
                    'all',
                    ...new Set(works.map((work)=>work.category)),
                ];
            
                categoryDOM.innerHTML= buttons
                .map((category)=>{
                    return `<button class="work-category" data-id="${category}">${category}</button>`;
                }).join('');
            
            }
            displayButtons();
            
            categoryDOM.addEventListener('click', (e)=>{
                const el = e.target;
                if(el.classList.contains('work-category')){
                    if(el.dataset.id === 'all'){
                        filteredWorks = [...works];
                    }else{
                        filteredWorks = works.filter((work)=>{
                            return work.category === el.dataset.id;
                        });
                    }
                    displayWorks();
                }
            })

    }catch(err){
        console.log(err)
    }
  
  }
  data();



  
  const worksContainer = document.querySelector('.works-grid')
  

  