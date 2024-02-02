import { AJAX } from "./helper.mjs";
import { API_URL } from "./config.mjs";

export const state = {
  overview: {},
  vulnerabilities: [],
  errorOverview: "",
  errorSearch: "",
};

const createOverviewObject = function (data) {
  const { vulnerabilities } = data;
  const [{ cve }] = vulnerabilities;

  const [descriptions] = cve.descriptions;
  const [metrics] =
    cve.metrics?.cvssMetricV31 ||
    cve.metrics?.cvssMetricV30 ||
    cve.metrics?.cvssMetricV2;
  const baseScore = metrics.cvssData.baseScore;
  const baseSeverity = metrics.cvssData?.baseSeverity || metrics?.baseSeverity;
  const [weaknesses] = cve.weaknesses;

  const object = {
    id: cve.id,
    published: cve.published,
    lastModified: cve.lastModified,
    source: cve.sourceIdentifier,
    vulnStatus: cve.vulnStatus,
    baseScore: baseScore,
    baseSeverity: baseSeverity,
    cvssVersion: metrics.cvssData.version,
    vectorString: metrics.cvssData.vectorString,
    epssScore: metrics.exploitabilityScore,
    impactScore: metrics.impactScore,
    descriptions: descriptions.value,
    weaknesses: weaknesses.description[0].value,
    references: cve.references,
  };
  return object;
};

export const loadOverviewCVEResults = async function (id) {
  try {
    const data = await AJAX(`${API_URL}cveId=${id}`);
    state.overview = createOverviewObject(data);

    console.log(state.overview);
  } catch (err) {
    state.errorOverview = `${err}`;
    console.error(err);
    throw err;
  }
};

export const loadVulnerabilitiesResults = async function (keyword, severity) {
  try {
    const data = severity
      ? await AJAX(
          `${API_URL}keywordSearch=${keyword}&cvssV3Severity=${severity}`
        )
      : await AJAX(`${API_URL}keywordSearch=${keyword}`);

    state.vulnerabilities = data.vulnerabilities
      .map((vuln) => {
        const cve = vuln.cve;
        const [metrics] =
          cve.metrics?.cvssMetricV31 ||
          cve.metrics?.cvssMetricV30 ||
          cve.metrics?.cvssMetricV2;
        const baseScore = metrics.cvssData.baseScore;
        const baseSeverity =
          metrics.cvssData?.baseSeverity || metrics?.baseSeverity;

        const object = {
          id: cve.id,
          vulnStatus: cve.vulnStatus,
          source: cve.sourceIdentifier,
          published: cve.published,
          baseScore: baseScore,
          baseSeverity: baseSeverity,
        };
        return object;
      })
      .reverse();

    console.log(state.vulnerabilities[0]);
  } catch (err) {
    state.errorSearch = `${err}`;
    console.error(`${err}`);
    throw err;
  }
};
