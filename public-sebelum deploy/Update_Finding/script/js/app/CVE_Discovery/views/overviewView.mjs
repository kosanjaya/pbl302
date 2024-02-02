class overviewView {
  _data;
  _cveID;
  _parentElement = document.getElementById("overview--content");
  _containerOverview = document.getElementById("CVE--overview");
  _containerCVEResults = document.getElementById("container-CVE_results");

  getID() {
    return this._cveID;
  }

  render(data) {
    this._data = data;
    const markup = this._generateMarkup();

    const cveID = this._data.id;

    this._clear();
    this._containerOverview.querySelector("#id--headerOverview").innerText =
      cveID;
    this._parentElement.insertAdjacentHTML("afterbegin", markup);
  }

  _clear() {
    this._parentElement.innerHTML = "";
    this._containerOverview.querySelector("#id--headerOverview").innerText = "";
  }

  addHandlerRender(handler) {
    this._containerCVEResults.addEventListener("click", (e) => {
      const btnResCVE = e.target.closest(".btn--resCVE");
      if (btnResCVE) {
        const cveID = btnResCVE.querySelector("#CVE-ID");
        this._cveID = cveID.innerText;

        this._containerOverview.classList.remove("translate-x-[100%]");
        this._containerOverview.classList.add("translate-x-0");
        handler();
      }
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
      class="w-full text-center text-[.9rem] text-[#e01e37] font-sans tracking-wider mt-12"
    >
      <p>${error}</p>
    </div>
    `;

    this._clear();
    this._parentElement.insertAdjacentHTML("afterbegin", markup);
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

  _generateMarkup() {
    return `
      <section id="overview--content" class="w-full">
        <h3 class="text-[1.2rem] font-sans font-bold mb-4">
          Overview
        </h3>
        <div class="flex flex-col gap-6 mb-10">
          <div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Published Date</p>
              <p class="w-[calc(100%-14rem)] text-white">${this._formatDate(
                this._data.published
              )}</p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Last Modified</p>
              <p class="w-[calc(100%-14rem)] text-white">
                ${this._formatDate(this._data.lastModified)}
              </p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Source Identifier</p>
              <p class="w-[calc(100%-14rem)] text-white">
                ${this._data.source}
              </p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Vuln Status</p>
              <p class="w-[calc(100%-14rem)] text-white">${
                this._data.vulnStatus
              }</p>
            </div>
          </div>
          <div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white font-bold">CVSS Score</p>
              <p class="w-[calc(100%-14rem)] ${this._severityColors(
                this._data.baseSeverity
              )} font-semibold">
                ${this._data.baseScore} ${this._data.baseSeverity}
              </p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Version</p>
              <p class="w-[calc(100%-14rem)] text-white">${
                this._data.cvssVersion
              }</p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Vector String</p>
              <p class="w-[calc(100%-14rem)] text-white">
                ${this._data.vectorString}
              </p>
            </div>
          </div>
          <div>
            <div class="w-full flex text-[.875rem] mb-1">
              <p class="w-[12rem] text-white">EPSS Score</p>
              <p class="w-[calc(100%-14rem)] text-white">${
                this._data.epssScore
              }</p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1">
              <p class="w-[12rem] text-white">Impact Score</p>
              <p class="w-[calc(100%-14rem)] text-white">${
                this._data.impactScore
              }</p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1">
              <p class="w-[12rem] text-white">Weakness Enumeration</p>
              <p class="w-[calc(100%-14rem)] text-white">${
                this._data.weaknesses
              }</p>
            </div>
          </div>
        </div>
        <div class="mb-10">
          <h3 class="text-[1.2rem] font-sans font-semibold mb-4">
            Description
          </h3>
          <p class="text-[.85rem] leading-7 tracking-wide">
            ${this._data.descriptions}
          </p>
        </div>
        <div>
          <h3 class="text-[1.2rem] font-sans font-bold mb-4">
            References
          </h3>
          <div class="flex flex-col gap-6 mb-10">
            <div>
              <div class="w-full flex text-[.875rem] mb-1">
                <p class="w-[12rem] text-white font-bold">Source</p>
                <p class="w-[calc(100%-14rem)] text-white font-bold">
                  References
                </p>
              </div>
                ${this._data.references
                  .map(this._generateMarkupReferences)
                  .join("")}
            </div>
          </div>
        </div>
      </section>
    </section>`;
  }

  _generateMarkupReferences(ref) {
    return `
    <div class="w-full flex text-[.875rem] mb-1">
        <p class="w-[12rem] text-white pr-6">
            ${ref.source}
        </p>
        <p class="w-[calc(100%-14rem)] text-white">
            ${ref.url}
        </p>
    </div>
    `;
  }
}

export default new overviewView();
