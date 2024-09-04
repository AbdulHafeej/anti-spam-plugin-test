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
