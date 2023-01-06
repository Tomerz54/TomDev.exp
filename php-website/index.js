function scrollToElement(elementId) {
// Get the element with the specified ID
    var element = document.getElementById(elementId);
// Scroll the element into view
    element.scrollIntoView({ behavior: "smooth", block: "start" });
}