
import { SingleProduct, Sidbar, Search } from './components';

export default function Main() {
  alert()
  return
  return (
    <>
      {/* <Search></Search> */}

      <div className="search-index_content__searchContentSection"
        id="content"
        data-controller="filters-switcher"
        data-filters-switcher-default-behavior-value="open"
        data-filters-switcher-button-active-class="search-index_content__filtersActive"
        data-filters-switcher-button-inactive-class="search-index_content__filtersInactive"
        data-filters-switcher-desktop-hide-class="search-index_content__hideDesktopFilters"
        data-filters-switcher-mobile-show-class="search-index_content__showMobileFilters"
        data-filters-switcher-icon-hide-class="search-index_content__hide">

        <div className='search-index_content__searchResults'>


          <Sidbar categoris={category}></Sidbar>

          <main className="search-index_content__searchResultsBody">
            <div className="search-index_content__searchResultsWrapper">
              <div
                data-controller="analytics-item-impressions"
                data-analytics-item-impressions-additional-params-value='{"dimension24":"portfolio","dimension25":6613,"dimension26":"site-templates"}'
                className="search-item_cards_container_component__list">

                {products.data?.map(
                  function (product, index) {
                    return (
                      <>
                        <SingleProduct item={product} />
                      </>

                    )

                  }
                )}

              </div>
            </div>
          </main>


        </div>
      </div>

    </>
  )
}