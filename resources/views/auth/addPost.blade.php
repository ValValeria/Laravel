<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Аккаунт - компания</title>
  <link href="/public/css/style.min.css" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <style>
      .title{
        color:white;
      }
      .ac-personal{
        min-height:auto !important;
      }
      .title :hover{
        color:white;
        text-decoration: none
      }
      .fit{
        background-size: cover;
        background-position: center
      }
  </style>
</head>
<body>
  <header class="page-header">
    <aside class="page-header__info-block info-block">
      <div class="container">
        <div class="info-block__wrapper">
          <div class="info-block__faq">
            <a class="info-block__faq-item info-block__faq-item--phone" href="tel:+74950000000">
              8 (495) 000-00-00
            </a>
            <a class="info-block__faq-item info-block__faq-item--quest" href="faq.html">
              Ответы на вопросы
            </a>
          </div>

          <div class="info-block__lk  info-block__lk--login">
            <a class="info-block__link" href="/logout">Выход</a>
            <a class="info-block__link  info-block__link--current"><?php echo Auth::user()->name?></a>
          </div>
        </div>
      </div>
    </aside>

    <aside class="page-header__menu-block page-header__menu-block--closed">
      <div class="container page-header__user-menu user-menu">
        <button class="user-menu__toggle">
          <span class="visually-hidden">Открыть меню</span>
          <i class="user-menu__toggle-icon"></i>
        </button>
        <div class="user-menu__logo">
          <a class="user-menu__logo-image title">
              MyBlog
          </a>
        </div>
        <div class="user-menu__icons">
          <a href="search.html" class="user-menu__icons-item">
            <svg width="20px" height="20px" viewBox="0 0 20 20" fill="#FFFFFF" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <path d="M15.4625645,14.0501328 L21.6428489,20.2513717 C21.8375914,20.4467745 21.8372729,20.7629832 21.6421372,20.9579934 L20.9482742,21.6514099 C20.7530973,21.8464612 20.436807,21.846529 20.2415465,21.6515612 L14.046238,15.4655392 C12.784921,16.4282365 11.2092318,17 9.5,17 C5.35786438,17 2,13.6421356 2,9.5 C2,5.35786438 5.35786438,2 9.5,2 C13.6421356,2 17,5.35786438 17,9.5 C17,11.2109915 16.4270586,12.7881654 15.4625645,14.0501328 Z M15,9.5 C15,12.5375661 12.5375661,15 9.5,15 C6.46243388,15 4,12.5375661 4,9.5 C4,6.46243388 6.46243388,4 9.5,4 C12.5375661,4 15,6.46243388 15,9.5 Z" id="search-icon"></path>
              </defs>
              <g id="Login" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="search-icon-ic_search">
                  <mask id="search-icon-mask-2" fill="white">
                    <use xlink:href="#search-icon"></use>
                  </mask>
                  <g id="search-icon-search"></g>
                  <g id="search-icon-Light-100" mask="url(#search-icon-mask-2)" fill="#FFFFFF" fill-rule="evenodd">
                    <rect id="search-icon-Placeholder-2" x="0" y="0" width="24" height="24"></rect>
                  </g>
                </g>
              </g>
            </svg>
          </a>
          <a href="up_account_company.html" class="user-menu__icons-item  user-menu__icons-item--login">
            <svg width="20px" height="19px" viewBox="0 0 20 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="user-icon-Home" stroke="none" stroke-width="1" fill-rule="evenodd">
                <g id="user-icon-m_Home_page" transform="translate(-227.000000, -20.000000)">
                  <g id="user-icon-Group-2">
                    <path d="M233.543967,28.6132965 C232.592539,27.703026 232,26.4207105 232,25 C232,22.2385763 234.238576,20 237,20 C239.761424,20 242,22.2385763 242,25 C242,26.4207105 241.407461,27.703026 240.456033,28.6132965 C244.27578,30.0201274 247,33.6919259 247,38 C247,38.1666667 247,38.3333333 247,38.5 C247,38.7761424 246.776142,39 246.5,39 L245.498546,39.0000018 C245.222582,39.0000018 244.998798,38.7764236 244.998544,38.50046 C244.998357,38.2963758 244.998842,38.1295558 245,38 C245,33.581722 241.418278,30 237,30 C232.581722,30 229,33.581722 229,38 C229.001253,38.1402053 229.001802,38.3069885 229.001645,38.5003493 L229.0017,38.5003494 C229.001477,38.7763641 228.77766,39 228.501646,39 L227.5,39 C227.223858,39 227,38.7761424 227,38.5 C227,38.3333333 227,38.1666667 227,38 C227,33.6919259 229.72422,30.0201274 233.543967,28.6132965 Z M237,22 C238.656854,22 240,23.3431458 240,25 C240,26.6568542 238.656854,28 237,28 C235.343146,28 234,26.6568542 234,25 C234,23.3431458 235.343146,22 237,22 Z" id="user-icon-accounts"></path>
                  </g>
                </g>
              </g>
            </svg>
          </a>
        </div>
        <nav class="page-header__main-nav main-nav">
          <div class="container">
            <ul class="main-nav__list">
              <li class="main-nav__list-item">
                <a href="catalog_1_state.html">Каталог</a>
              </li>
              <li class="main-nav__list-item">
                <a href="not-found.html">Агентам</a>
              </li>
              <li class="main-nav__list-item">
                <a href="about-us.html">О компании</a>
              </li>
              <li class="main-nav__list-item main-nav__list-item--hidden">
                <a href="faq.html">Ответы на вопросы</a>
              </li>
              <li class="main-nav__list-item">
                <a href="contacts.html">Контакты</a>
              </li>
            </ul>
          </div>
          <div class="main-nav__number">
            <div class="container">
              <a href="tel:+74950000000">8 (495) 000-00-00</a>
            </div>
          </div>
        </nav>
      </div>
    </aside>
  </header>

  <main class="showcase-main">
    <div class="container">
      <section class="showcase-form">


        <div class="showcase-form__titles">
          <h1 class="showcase-form__title">Витрина товаров</h1>
          <h2 class="showcase-form__subtitle">Добавить</h2>
        </div>

        <form class="showcase-form__form" id="thatform">
            @csrf
          <div class="showcase-form__form-upload">
            <div class="showcase-form__form-upload-wrapper">
              <div class="main-label">
                <label for="image-one-field">
                  <span class="visually-hidden">Выбрать файл</span>
                  <i class="label-icon"></i>
                </label>
                <input class="showcase-form__form-upload-input" type="file" name="image-one" id="image-one-field">
              </div>

              <label for="image-two-field">
                <span class="visually-hidden">Выбрать файл</span>
                <i class="label-icon"></i>
              </label>
              <input class="showcase-form__form-upload-input" type="file" name="image-two" id="image-two-field">

              <label for="image-three-field">
                <span class="visually-hidden">Выбрать файл</span>
                <i class="label-icon"></i>
              </label>
              <input class="showcase-form__form-upload-input" type="file" name="image-three" id="image-three-field">

              <label for="image-four-field">
                <span class="visually-hidden">Выбрать файл</span>
                <i class="label-icon"></i>
              </label>
              <input class="showcase-form__form-upload-input" type="file" name="image-four" id="image-four-field">
            </div>

            <div class="showcase-form__form-upload-button">
              <input class="button button--w100" type="button" name="upload-button" id="upload-button-field" value="Загрузить фотографии">
            </div>
            <p class="showcase-form__form-upload-notice">
              Максимальный размер файлов 2 мб 488x444 px
            </p>
          </div>

          <div class="showcase-form__form-wrapper">
           
            <div class="showcase-form__form-item showcase-form__form-item--w100 form__item  field-text">
              <label class="field-text__label  visually-hidden" for="product-name-field">Название поста</label>
              <input class="field-text__value" type="text" name="post-name" id="product-name-field" placeholder="Название поста">
            </div>

            <div class="field-text form__item">
              <label class="field-text__label visually-hidden" for="short-description-field">Краткое описание поста</label>
              <textarea class="field-text__value showcase-form__form-textarea" name="post-short-description" id="short-description-field" placeholder="Краткое описание поста" ></textarea>
            </div>
            <div class="showcase-form__form-select">
              
              <div class="showcase-form__form-select-item showcase-form__form-select-item--category">
                <label class="visually-hidden" for="showcase-category-field">Категория</label>
                <select name="showcase-category" id="showcase-category-field" name="cat[]" multiple>
                    @if($categories)
                    @foreach ($categories as $item)
                         @if(array_search($item,$categories)==0)
                           <option selected>{{$item}}</option>
                         @else
                           <option>{{$item}}</option>
                         @endif
]                    @endforeach
                    @endif                
                </select>
              </div>

              
            </div>
          </div>

          <div class="showcase-form__form-bottom">
            <div class="field-text form__item">
              <label class="field-text__label visually-hidden" for="description-field">Содержание поста</label>
              <textarea class="field-text__value  field-text__area" name="post-long-description" id="description-field" placeholder="Содержание товара" ></textarea>
            </div>
            @if($errors->any())
            <div class="alert alert-danger" style="margin-top:20px;max-height:80px;">
               <ul>
                 <br/>
                   @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @break
                    <br/>  
                   @endforeach
               </ul>
               <br/>
           </div>
            @endif
            <div class="showcase-form__form-button">
              <input class="button button--w100" type="submit" value="Загрузить пост ">
            </div>
          </div>
        </form>
      </section>
    </div>
  </main>


  <footer class="login-page__copyright">© 2018 Partners. Все права защищены</footer>
  <script>
   
    /*let form =document.querySelector('#thatform');
    form.onsubmit=(e)=>{
      e.preventDefault();
      const request= new XMLHttpRequest();
      request.open('POST','/auth/addpost')
      request.setRequestHeader('X-CSRF-TOKEN',document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
      request.send(new FormData(form))

      request.onreadystatechange=()=>{
        if(this.readyState==4 && this.status==200){
          console.log(this.responseText)
        }
      }
    }*/
 

    let filesForm=document.querySelectorAll('.showcase-form__form-upload-wrapper label')
    for(let form of filesForm ){
       form.onclick=(e)=>{
         e.stopPropagation();
         e.preventDefault()
         let id=form.getAttribute('for')
         let inputFile=document.getElementById(id)
         if(inputFile){
           
           inputFile.click()
           inputFile.onchange=()=>{
            let file=inputFile.files[0]
            if(file.type.startsWith('image/')){
               let url=URL.createObjectURL(file)
               form.style.backgroundImage=`url(${url})`
               form.classList.toggle('fit')
               form.removeChild(form.firstElementChild)
               form.removeChild(form.lastElementChild)
            }
          
           }
         }
       }
    }
  </script>
</body>
</html>
