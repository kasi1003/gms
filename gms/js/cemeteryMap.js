// Function to fetch grave data from the PHP script
async function fetchGraveDataFromPHP() {
    try {
        const response = await fetch('cemeteryMap.php'); // Update the URL to the correct path
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching grave data from PHP:', error);
        return [];
    }
}

// Function to update the available graves on the SVG
async function updateGraveCount() {
    const graveData = await fetchGraveDataFromPHP();
    // Loop through the grave data and update the corresponding SVG elements
    graveData.forEach(grave => {
        // Assuming each grave has a "section_code" field
        const sectionId = `s${grave.section_code}`;
        // Access the SVG element directly by the sectionId (path ID)
        const sectionElement = document.getElementById(sectionId);
        
        // Only update the available graves for sections that have a matching ID
        if (sectionElement) {
            // Update the "title" attribute to display the available graves
            sectionElement.setAttribute('title', `Available Graves: ${grave.available_graves}`);
        }
    });
}

// Add an event listener to trigger the updateGraveCount function when the page is loaded
document.addEventListener('DOMContentLoaded', () => {
    updateGraveCount();
});
