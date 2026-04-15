// main.js

// Metadata about user's Edge browser tabs
const edge_all_open_tabs = [
  {
    pageTitle: "Untitled Page",
    pageUrl: "about:blank",
    tabId: -1,
    isCurrent: true,
  },
  {
    pageTitle: "Rafting Adventures – Trips",
    pageUrl: "http://127.0.0.1/trips.html",
    tabId: 1415180509,
    isCurrent: false,
  },
];

// Example function to display tab information
function listOpenTabs(tabs) {
  console.log("Currently open tabs:");
  tabs.forEach((tab) => {
    console.log(
      `Tab ID: ${tab.tabId}, Title: "${tab.pageTitle}", URL: ${tab.pageUrl}, Active: ${tab.isCurrent}`,
    );
  });
}

// Run the function
listOpenTabs(edge_all_open_tabs);
