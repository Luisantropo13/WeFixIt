<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #EAEBEF;
        font-family: 'Poppins', sans-serif;
    }

    .aside__link {
        color: #303440;
        display: block;
        padding: 15px 0;
        text-decoration: none;
    }

    .aside__link--inside {
        border-radius: 6px;
        padding-left: 20px;
        text-align: left;
    }

    .aside__link--inside:hover {
        background: #F6F8FA;
    }

    .list {
        height: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        border-radius: 0 16px 16px 0;
        background: #fff;
    }

    .list__item {
        list-style: none;
        width: 100%;
        text-align: center;
        overflow: hidden;
    }

    .list__item--click {
        cursor: pointer;
    }

    .list__button {
        display: flex;
        align-items: center;
        gap: 1em;
        width: 70%;
        margin: 0 auto;
    }

    .arrow .list__arrow {
        transform: rotate(90deg);
    }

    .list__arrow {
        margin-left: auto;
        transition: transform .3s;
    }

    .list__show {
        width: 80%;
        margin-left: auto;
        border-left: 2px solid #303440;
        list-style: none;
        transition: height .4s;
        height: 0;
    }
</style>

<div class="row">
    <aside class="aside col-3">
        <ul class="list">

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="assets/docs.svg" class="list__img">
                    <a href="#" class="aside__link">Services</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">Device Repair</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">Network Install</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">Technical Advisement</a>
                    </li>
                </ul>

            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="assets/docs.svg" class="list__img">
                    <a href="#" class="aside__link">Computers</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">PC</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">Laptops</a>
                    </li>
                    
                </ul>

            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="assets/docs.svg" class="list__img">
                    <a href="#" class="aside__link">Smartphone</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">Samsung</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">Xiaomi</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">Iphone</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="aside__link aside__link--inside">Opo</a>
                    </li>
                    
                </ul>

            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../../../public/media/assets/bell.svg" class="list__img">
                    <a href="#" class="aside__link">Consoles</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

            </li>

            <li class="list__item">
                <div class="list__button">
                    <img src="assets/dashboard.svg" class="list__img">
                    <a href="#" class="aside__link">Reconditioned</a>
                </div>
            </li>

            <li class="list__item">
                <div class="list__button">
                    <img src="assets/message.svg" class="list__img">
                    <a href="#" class="aside__link">Others</a>
                </div>
            </li>

        </ul>
    </aside>

    <section class="col-9">
        <div style="text-align:center;">
            <div class="row fila">
                @foreach($items as $item)

                <div class="card col-3">
                    <img class="card-img-top" src="media/uploaded_files/{{$item->imagenFoto}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->productModel}}</h5>
                        <p class="card-text">{{$item->productDescription}}</p>
                        <p class="card-text">{{$item->productPrice}}€</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
</div>


<script>
    let listElements = document.querySelectorAll('.list__button--click');

    listElements.forEach(listElement => {
        listElement.addEventListener('click', () => {

            listElement.classList.toggle('arrow');

            let height = 0;
            let menu = listElement.nextElementSibling;
            if (menu.clientHeight == "0") {
                height = menu.scrollHeight;
            }

            menu.style.height = `${height}px`;

        })
    });
</script>