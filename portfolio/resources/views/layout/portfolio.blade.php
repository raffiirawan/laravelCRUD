<article class="portfolio" data-page="portfolio">

    <header>
      <h2 class="h2 article-title">Portfolio</h2>
    </header>

    <section class="projects">

      <ul class="filter-list">

        <li class="filter-item">
          <button class="active" data-filter-btn>All</button>
        </li>

        <li class="filter-item">
          <button data-filter-btn>Web development</button>
        </li>

        <li class="filter-item">
          <button data-filter-btn>Certificate</button>
        </li>

        {{-- <li class="filter-item">
          <button data-filter-btn>Web development</button>
        </li> --}}

      </ul>

      <div class="filter-select-box">

        <button class="filter-select" data-select>

          <div class="select-value" data-selecct-value>Select category</div>

          <div class="select-icon">
            <ion-icon name="chevron-down"></ion-icon>
          </div>

        </button>

        <ul class="select-list">

          <li class="select-item">
            <button data-select-item>All</button>
          </li>

          <li class="select-item">
            <button data-select-item>Web development</button>
          </li>

          <li class="select-item">
            <button data-select-item>Certificate</button>
          </li>

          {{-- <li class="select-item">
            <button data-select-item>Web development</button>
          </li> --}}

        </ul>

      </div>

      <ul class="project-list">

        <li class="project-item  active" data-filter-item data-category="certificate">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="./images/mikrotikCertificate.png" alt="fundo" loading="lazy">
            </figure>

            <h3 class="project-title">Mikrotik Certificate</h3>

            <p class="project-category">Certificate</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="applications">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="./images/toeicCerti.jpeg" alt="brawlhalla" loading="lazy">
            </figure>

            <h3 class="project-title">TOEIC Certificate</h3>

            <p class="project-category">Certificate</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="web development">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="./images/crudApp.png" alt="finance" loading="lazy">
            </figure>

            <h3 class="project-title">Laravel CRUD</h3>

            <p class="project-category">Web development</p>

          </a>
        </li>

        {{-- <li class="project-item  active" data-filter-item data-category="web design">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="./images/project-5.png" alt="dsm." loading="lazy">
            </figure>

            <h3 class="project-title">DSM.</h3>

            <p class="project-category">Web design</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="web design">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="./images/project-6.png" alt="metaspark" loading="lazy">
            </figure>

            <h3 class="project-title">MetaSpark</h3>

            <p class="project-category">Web design</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="web development">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="./images/project-7.png" alt="summary" loading="lazy">
            </figure>

            <h3 class="project-title">Summary</h3>

            <p class="project-category">Web development</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="applications">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="./images/project-8.jpg" alt="task manager" loading="lazy">
            </figure>

            <h3 class="project-title">Task Manager</h3>

            <p class="project-category">Applications</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="web development">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="./images/project-9.png" alt="arrival" loading="lazy">
            </figure>

            <h3 class="project-title">Arrival</h3>

            <p class="project-category">Web development</p>

          </a>
        </li> --}}

      </ul>

    </section>

  </article>