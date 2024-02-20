export  function  Sidbar(props){
  let {categoris} = props;
    return(
        
      <div>
      <div
        className="search-index_content__filtersPanel"
        data-analytics-section-id="refinement"
        data-filters-switcher-target="panel"
      >
        <div className="search-index_content__mobileFiltersHeader">
          <div className="search-index_content__mobileFiltersHeadings">
            <h3>Filter &amp; Refine</h3>
            <span>6,613 results</span>
          </div>
          <a href="/search/portfolio">Clear all</a>
          <button
            data-filters-switcher-target="mobileButton"
            data-action="analytics-event#send filters-switcher#toggle"
            data-analytics-event='{"hitType":"event","eventCategory":"FilterUsage","eventAction":"click","eventLabel":"Close"}'
          >
            Done
          </button>
        </div>
        <div
          className="search-filters-filters_panel_component__filter"
          data-controller="toggler"
          data-filter-title="Category"
          data-toggler-session-storage-key-value="Category"
          data-toggler-expanded-value="true"
          data-toggler-toggle-on-connect-value="true"
        >
          <div
            className="search-filters-filters_panel_component__filterHeader"
            data-action="click->analytics-event#sendFilterPanelEvent click->toggler#toggle"
            data-toggler-target="toggle"
            data-toggler-expanded-aria-label="Collapse Category Filter"
            data-toggler-collapsed-aria-label="Expand Category Filter"
            aria-label="Collapse Category Filter"
            data-analytics-event='{"hitType":"event","eventAction":"click","eventLabel":"category"}'
          >
            <h3 className="search-filters-filters_panel_component__filterHeading">
              دسته بندی
            </h3>
            <span
              className="search-filters-filters_panel_component__chevron search-filters-filters_panel_component__expanded"
              data-toggler-target="toggle"
              data-toggler-expanded-class="search-filters-filters_panel_component__expanded"
            >
              <svg width="100%" height="100%">
                <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#button_chevron_right" />
              </svg>
            </span>
          </div>
          <div
            className="search-filters-filters_panel_component__filterBody search-filters-filters_panel_component__expanded"
            data-toggler-target="toggle"
            data-toggler-expanded-class="search-filters-filters_panel_component__expanded"
          >
            <nav
              className="search-filters-category_filter_component__root"
              aria-label="categories filter"
            >
              <ul>
                  {console.log(categoris)}
                {categoris.item?.map(
      function(categori,index) {
          return(
            <>                        
              <li className="search-filters-category_filter_component__category">
                    <span className="search-filters-category_filter_component__chevronIcon">
                      <svg width="100%" height="100%">
                        <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#chevron_left" />
                      </svg>
                    </span>
                    <a
                      className="search-filters-category_filter_component__categoryLink search-filters-category_filter_component__parent"
                      data-analytics-element-id="category"
                      data-analytics-element-label="All categories"
                      href={'/shop/'+categori.title}
                    >
                {categori.title}
                    </a>
                    <span className="search-filters-category_filter_component__count">
                      #تعداد
                    </span>
                  </li> 
            </>
              
          )

      }
  )}
                
   
              </ul>
            </nav>
          </div>
        </div>

        <div
          className="search-filters-filters_panel_component__filter"
          data-controller="toggler"
          data-filter-title="Price"
          data-toggler-session-storage-key-value="Price"
          data-toggler-expanded-value="true"
          data-toggler-toggle-on-connect-value="true"
        >
          <div
            className="search-filters-filters_panel_component__filterHeader"
            data-action="click->analytics-event#sendFilterPanelEvent click->toggler#toggle"
            data-toggler-target="toggle"
            data-toggler-expanded-aria-label="Collapse Price Filter"
            data-toggler-collapsed-aria-label="Expand Price Filter"
            aria-label="Collapse Price Filter"
            data-analytics-event='{"hitType":"event","eventAction":"click","eventLabel":"price"}'
          >
            <h3 className="search-filters-filters_panel_component__filterHeading">
              فیلتر قیمت
            </h3>
            <span
              className="search-filters-filters_panel_component__chevron search-filters-filters_panel_component__expanded"
              data-toggler-target="toggle"
              data-toggler-expanded-class="search-filters-filters_panel_component__expanded"
            >
              <svg width="100%" height="100%">
                <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#button_chevron_right" />
              </svg>
            </span>
          </div>
          <div
            className="search-filters-filters_panel_component__filterBody search-filters-filters_panel_component__expanded"
            data-toggler-target="toggle"
            data-toggler-expanded-class="search-filters-filters_panel_component__expanded"
          >
            <div>
              <form
                method="get"
                action="/search"
                data-analytics-form-id="Price"
                data-controller="data-action="
              >
                <input
                  type="hidden"
                  name="category"
                  defaultValue="site-templates"
                />
                <input type="hidden" name="term" defaultValue="portfolio" />
                <div className="search-filters-range_filter_component__inputsContainer">
                  <div className="search-filters-range_filter_component__inputWrapper">
                  
                    <input
                      type="text"
                      name="price_min"
                      className="search-filters-range_filter_component__input"
                      placeholder={`از  ${categoris.price.min}`}
                      title="Enter price as a whole number"
                      pattern="^\d*$"
                      data-analytics-label-id="min"
                      data-length-format-target="input"
                      defaultValue=""
                    />
                  </div>
                  <span className="search-filters-range_filter_component__spacer">
                    -
                  </span>
                  <div className="search-filters-range_filter_component__inputWrapper">
                   
                    <input
                      type="text"
                      name="price_max"
                      className="search-filters-range_filter_component__input"
                      placeholder={`تا  ${categoris.price.max}`}
                      title="Enter price as a whole number"
                      pattern="^\d*$"
                      data-analytics-label-id="max"
                      data-length-format-target="input"
                      defaultValue=""
                    />
                  </div>
                  <button
                    type="submit"
                    aria-label="submit"
                    className="search-filters-range_filter_component__button"
                  >
                    <span className="search-filters-range_filter_component__chevron">
                      <svg width="100%" height="100%">
                        <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#button_chevron_right" />
                      </svg>
                    </span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
         
        <div
          className="search-filters-filters_panel_component__filter"
          data-controller="toggler"
          data-filter-title="On Sale"
          data-toggler-session-storage-key-value="On Sale"
          data-toggler-expanded-value="true"
          data-toggler-toggle-on-connect-value="true"
        >
        
         
        </div>
    
      
     
      
      </div>
    </div>

    )
}