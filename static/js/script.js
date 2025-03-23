// Simple JavaScript for MMA Polska website

document.addEventListener('DOMContentLoaded', function() {
  // Set current year in copyright
  document.querySelectorAll('.current-year').forEach(function(element) {
    element.textContent = new Date().getFullYear();
  });
});
