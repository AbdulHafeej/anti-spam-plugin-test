<style>
  .copy-item{
    padding: 16px;
    font-family: "Roboto Condensed", Sans-serif;
    font-size: 15px;
    font-weight: 400;
    margin-bottom:6px;
}

#copyText2, #copyText4{
    color:#696CFF;
    background-color: #e6e6e6;
}

#copyText2.copy-item:hover, #copyText4.copy-item:hover{
    color:#e6e6e6;
    background-color: #696CFF;
}
    .icon-copied {
        color: grey; /* Change this color as needed */
    }
</style>
<div id="copyContainer">
<h2>Live Demo: AntiSpam Bee WordPress Plugin</h2>
<p>Test AntiSpam Bee plugin’s capabilities by entering sample spam and ligitimate comment script in the below WordPress Comment Form.</p>
    <div id="copyText2" class="copy-item" style="cursor:pointer;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" class="icon-sm">
            <path fill="currentColor" fill-rule="evenodd" d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z" clip-rule="evenodd"></path>
        </svg>
        Click Here To Copy Sample Spam Message.
    </div>

    <!-- Text 4 -->
    <div id="copyText4" class="copy-item" style="cursor:pointer; margin:0px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" class="icon-sm">
            <path fill="currentColor" fill-rule="evenodd" d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z" clip-rule="evenodd"></path>
        </svg>
       Click Here To Copy Sample Legit Message.
    </div>
  </div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll("#copyText2, #copyText4").forEach(function(copyItem) {
        copyItem.addEventListener("click", function() {
            let textToCopy;
            let targetElementSelector = ".comment-form-comment textarea"; // Updated selector to directly target the textarea

            // Determine which text to copy
            if (this.id === "copyText2") {
                textToCopy = `Dear John,\n\nYou've been selected for an exclusive investment opportunity with guaranteed high returns. Act now to double, even triple, your money in just weeks.\n\nDon't miss out on this once-in-a-lifetime chance. Click the link to secure your spot and start earning big today!\n\nBest Regards,\nHenry Maxwell`;
            } else if (this.id === "copyText4") {
                textToCopy = `Dear Jane Doe,\n\nThank you for reaching out to our customer service team. We have received your inquiry and will get back to you within 24-48 hours.\n\nFor urgent matters, please feel free to contact us directly at (123) 456-7890.\n\nBest Regards,\nCustomer Support Team`;
            }

            // Insert textToCopy into the specified input or textarea element
            let targetElement = document.querySelector(targetElementSelector);
            if (targetElement) {
                targetElement.value = textToCopy; // Fill the textarea with the textToCopy
            }

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

            // Change the SVG icon color
            const svgIcon = this.querySelector("svg");
            svgIcon.classList.add("icon-copied");

            // Remove the color change after 0.5 seconds
            setTimeout(() => {
                svgIcon.classList.remove("icon-copied");
            }, 500);
        });
    });
});

</script>
