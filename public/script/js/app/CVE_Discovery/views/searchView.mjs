class SearchView {
  _data;
  _parentElement = document.getElementById("container-CVE_results");
  _cveSelectSeverity = document.getElementById("cvss-severity");
  _inputFieldSearch = document.getElementById("search_CVE");
  _btnSearchCVE = document.getElementById("btn-searchCVE");

  render() {
    const markup = this._generateMarkup();

    this._clear();
    this._parentElement.insertAdjacentHTML("afterbegin", markup);
  }

  loadRender(data) {
    this._data = data;
    const markup = this._markup();

    return markup;
  }

  _clear() {
    this._parentElement.innerHTML = "";
  }

  getQuery() {
    const query = this._inputFieldSearch.value;
    const selectedSeverity =
      this._cveSelectSeverity.options[this._cveSelectSeverity.selectedIndex]
        .value;

    this._clearInput();
    return [query, selectedSeverity];
  }

  _clearInput() {
    this._inputFieldSearch.value = "";
  }

  addHandlerSearch(handler) {
    this._btnSearchCVE.addEventListener("click", () => {
      handler();
    });
  }

  renderLoader() {
    this._parentElement.innerHTML = "";
    const markup = `
    <div
      class="w-full h-full flex justify-center items-center bg-transparent mt-12"
    >
      <div
        class="w-12 h-8 flex justify-between items-center animate-pulse"
      >
        <div class="w-3 h-3 bg-primary rounded-full"></div>
        <div class="w-3 h-3 bg-primary rounded-full"></div>
        <div class="w-3 h-3 bg-primary rounded-full"></div>
      </div>
    </div>
    `;
    this._clear();
    this._parentElement.insertAdjacentHTML("afterbegin", markup);
  }

  renderError(error) {
    const markup = `
    <div
      class="w-full text-center text-[.9rem] text-[#e01e37] font-['Montserrat'] tracking-wider mt-12"
    >
      <p>${error}</p>
    </div>
    `;

    this._clear();
    this._parentElement.insertAdjacentHTML("afterbegin", markup);
  }

  _generateMarkup() {
    return this._data.map((res) => this.loadRender(res)).join("");
  }

  _formatDate(date) {
    const originalDateString = date;
    const originalDate = new Date(originalDateString);

    // Options for formatting the date
    const options = { day: "numeric", month: "long", year: "numeric" };

    // Format the date
    const formattedDate = originalDate.toLocaleDateString("en-US", options);

    return formattedDate;
  }

  _severityColors(severity) {
    if (severity === "CRITICAL") {
      return "text-red-critical";
    } else if (severity === "HIGH") {
      return "text-orange-high";
    } else if (severity === "MEDIUM") {
      return "text-yellow-medium";
    } else if (severity === "LOW") {
      return "text-green-low";
    } else {
      return "text-regular";
    }
  }

  _markup() {
    return `
    <button
      id="btn--resCVE"
      type="button"
      class="btn--resCVE flex justify-between items-center w-full bg-secondary rounded-md hover:shadow-[0_0_15px_0_rgba(24,209,203,.65)_inset] outline-none focus:outline-1 focus:outline-offset-4 focus:outline-primary transition-all duration-300 ease-out py-6 px-4 mb-2"
    >
      <div
        id="CVE-ID"
        class="w-[13.5%] text-white text-start text-[.9rem] font-sans font-light tracking-wider truncate pr-3"
      >
        ${this._data.id}
      </div>
      <div
        class="w-[16%] text-white text-start text-[.9rem] font-sans font-light tracking-wider truncate pr-3"
      >
        ${this._data.vulnStatus}
      </div>
      <div
        class="w-[25%] text-white text-start text-[.9rem] font-sans font-light tracking-wider truncate pr-3"
      >
        ${this._data.source}
      </div>
      <div
        class="w-[13.5%] text-white text-start text-[.9rem] font-sans font-light tracking-wider truncate pr-3"
      >
        ${this._formatDate(this._data.published)}
      </div>
      <div
        class="w-[12.5%] ${this._severityColors(
          this._data.baseSeverity
        )} text-start text-[.9rem] font-sans font-light tracking-wider truncate pr-3"
      >
        ${this._data.baseScore} ${this._data.baseSeverity}
      </div>
    </button>
    `;
  }
}

export default new SearchView();
