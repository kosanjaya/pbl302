import * as model from "./model.mjs";
import overviewView from "./views/overviewView.mjs";
import searchView from "./views/searchView.mjs";
import SearchView from "./views/searchView.mjs";

const controlOverviewCVE = async function () {
  try {
    overviewView.renderLoader();

    // 1) get CVE ID
    const cveID = overviewView.getID();
    if (!cveID) return;

    // 2) load overview
    await model.loadOverviewCVEResults(cveID);

    // 3) render results
    overviewView.render(model.state.overview);
  } catch (err) {
    console.error(err);
    overviewView.renderError(err);
  }
};

const severityValidation = function (severity) {
  const defaultSeverity = ["CRITICAL", "HIGH", "MEDIUM", "LOW"];

  if (defaultSeverity.includes(severity)) {
    return severity;
  } else {
    return "";
  }
};

const controlCVESearchResults = async function () {
  try {
    searchView.renderLoader();

    // 1) get query
    const [query, selectedSeverity] = searchView.getQuery();
    const cleanQuery = query.trim();
    const validatedSeverity = severityValidation(selectedSeverity);

    console.log(cleanQuery, validatedSeverity);

    // 2) load search results
    await model.loadVulnerabilitiesResults(cleanQuery, validatedSeverity);

    // 3) render results
    SearchView.loadRender(model.state.vulnerabilities);
    searchView.render();
  } catch (err) {
    console.error(err);
    searchView.renderError(err);
  }
};

const init = function () {
  searchView.addHandlerSearch(controlCVESearchResults);
  overviewView.addHandlerRender(controlOverviewCVE);
};

init();

////////////// TEST DATA
// model.loadOverviewCVEResults("CVE-2020-3322");
// model.loadVulnerabilitiesResults("Microsoft", "LOW");
