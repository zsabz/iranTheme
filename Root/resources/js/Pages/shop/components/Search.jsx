import axios from "axios";
import { useState } from "react";

export function Search() {
  const [result, setResult] = useState(
    {
      products: null,
      category: null,
    }
  )

  const getResult = async (e) => {
    e.preventDefault()
    let word = e.target.value;
    let option = {
      url: '',
      method: 'GET',
      body: {
        word: word,
      }
    }

    try {
      await axios(option).then((response) => {
        console.log(response);
        setResult(response.data);
      })

    } catch (error) {

    }
  }
  return (
    <div
      className="search-search_header_component__root"
      data-controller="toggler"
    >
      {
        result?.products && result.products.map((item) => {
          return <p>{item.name}</p>
        })
      }
      <form
        role="search"
        method="get"
        action="#"
        className="shared-autosuggest_component__root shared-autosuggest_component__fullLayoutStyle"
        data-controller="autosuggest"
        data-action="submit->autosuggest#onSubmit"
        data-autosuggest-target="form"
        data-autosuggest-result-class="shared-autosuggest_component__searchItem"
        data-autosuggest-result-category-class="shared-autosuggest_component__searchItemCategory"
        data-autosuggest-result-separator-class="shared-autosuggest_component__searchItemSeparator"
        data-autosuggest-category-value="site-templates"
        data-autosuggest-suggestions-count-value={5}
        aria-expanded="false"
        onSubmit={(e) => getResult(e)}
      >

        <div className="shared-autosuggest_component__searchInputWrapper">
          <input
            className="shared-autosuggest_component__searchInput"
            placeholder="در این نتایج جستجو کنید"
            name="q"
            autoComplete="off"
            type="search"
            aria-label="جستجو کردن"

            data-search-term="portfolio"
            data-action="keydown->autosuggest#onKeydown blur->autosuggest#onInputBlur focus->autosuggest#onInputFocus input->autosuggest#onInputChange"
            data-autosuggest-target="input"
            spellCheck="false"
          />
          <button
            className="shared-autosuggest_component__clearSearchBtn"
            type="button"
            aria-label="پاک کردن"
            data-action="click->autosuggest#clearSearchInput"
            data-autosuggest-target="clear"
            data-visible="false"
          >
            <span className="shared-autosuggest_component__clearSearchIcon">
              <svg width="100%" height="100%">
                <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#close" />
              </svg>
            </span>
          </button>
          <nav
            className="shared-autosuggest_component__searchSuggestions"
            data-autosuggest-target="results"
            hidden=""
          />
          <button
            className="shared-autosuggest_component__searchBtn"
            aria-label="جستجو کردن"
            data-action="click->analytics-event#send"
            data-autosuggest-target="submit"
            data-analytics-event='{"hitType":"event","eventAction":"click;button","eventLabel":"Search bar","eventCategory":"Block interaction; Search"}'
          >
            <span className="shared-autosuggest_component__searchBtnIcon">
              <svg width="100%" height="100%">
                <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#search" />
              </svg>
            </span>
            <span className="shared-autosuggest_component__searchBtnLabel">
              <font style={{ verticalAlign: "inherit" }}>
                <font style={{ verticalAlign: "inherit" }}>جستجو کردن</font>
              </font>
            </span>
          </button>
        </div>
      </form>
      <div className="search-search_header_component__headingContainer">
        <h1 className="search-search_header_component__heading">
          <font style={{ verticalAlign: "inherit" }}>
            <font style={{ verticalAlign: "inherit" }}>
              نمونه کارها قالب های وب سایت HTML
            </font>
          </font>
        </h1>
      </div>
    </div>

  )
}