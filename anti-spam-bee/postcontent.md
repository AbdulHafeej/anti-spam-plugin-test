<div id="copyContainer" style="width: 100%;">
    <p>Test AntiSpam Bee plugin’s capabilities by entering sample spam and legitimate comment script in the below WordPress Comment Form.</p>
    
    <button id="copyText2" onclick="copyText2()" style="display: block; width: 100%; padding: 16px; font-family: 'Roboto Condensed', Sans-serif; font-size: 15px; font-weight: 400; margin-bottom: 6px; color: #696CFF; background-color: #e6e6e6; border: none; cursor: pointer; text-align: left; box-sizing: border-box; border-radius: 4px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" class="icon-sm" style="vertical-align: middle; margin-right: 8px;">
            <path fill="currentColor" fill-rule="evenodd" d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z" clip-rule="evenodd"></path>
        </svg>
        Click Here To Copy Sample Spam Message.
    </button>

    <button id="copyText4" onclick="copyText4()" style="display: block; width: 100%; padding: 16px; font-family: 'Roboto Condensed', Sans-serif; font-size: 15px; font-weight: 400; margin: 0px; color: #696CFF; background-color: #e6e6e6; border: none; cursor: pointer; text-align: left; box-sizing: border-box; border-radius: 4px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" class="icon-sm" style="vertical-align: middle; margin-right: 8px;">
            <path fill="currentColor" fill-rule="evenodd" d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z" clip-rule="evenodd"></path>
        </svg>
        Click Here To Copy Sample Legit Message.
    </button>
</div>

<script>
function copyText2() {
    let textToCopy;
        textToCopy = `Dear John,\n\nYou've been selected for an exclusive investment opportunity with guaranteed high returns. Act now to double, even triple, your money in just weeks.\n\nDon't miss out on this once-in-a-lifetime chance. Click the link to secure your spot and start earning big today!\n\nBest Regards,\nHenry Maxwell`;

    // Create a hidden textarea element
    const textarea = document.createElement("textarea");
    textarea.value = textToCopy;
    document.body.appendChild(textarea);

    // Select the textarea content
    textarea.select();
    textarea.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text to clipboard
    document.execCommand("copy");

    // Remove the textarea from the DOM
    document.body.removeChild(textarea);

    // Alert the user
    alert('Spam Text copied to clipboard!');

    // Change the SVG icon color
    const button = document.getElementById("copyText2");
    const svgIcon = button.querySelector("svg");
    svgIcon.style.color = 'grey'; // Update color directly

    // Remove the color change after 0.5 seconds
    setTimeout(() => {
        svgIcon.style.color = ''; // Reset color
    }, 500);
}
  
  function copyText4() {
    let textToCopy;
        textToCopy = `Dear Jane Doe,\n\nThank you for reaching out to our customer service team. We have received your inquiry and will get back to you within 24-48 hours.\n\nFor urgent matters, please feel free to contact us directly at (123) 456-7890.\n\nBest Regards,\nCustomer Support Team`;

    // Create a hidden textarea element
    const textarea = document.createElement("textarea");
    textarea.value = textToCopy;
    document.body.appendChild(textarea);

    // Select the textarea content
    textarea.select();
    textarea.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text to clipboard
    document.execCommand("copy");

    // Remove the textarea from the DOM
    document.body.removeChild(textarea);

    // Alert the user
    alert('Legit Text copied to clipboard!');

    // Change the SVG icon color
    const button = document.getElementById("copyText4");
    const svgIcon = button.querySelector("svg");
    svgIcon.style.color = 'grey'; // Update color directly

    // Remove the color change after 0.5 seconds
    setTimeout(() => {
        svgIcon.style.color = ''; // Reset color
    }, 500);
}
</script>
