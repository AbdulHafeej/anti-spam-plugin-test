<h2>Click the Button to Copy the Text Below:</h2>
    <div id="copyBox1" style="border: 1px solid #ccc; padding: 10px; width: 100%; height: auto; background-color: #f9f9f9; margin-bottom: 10px;">
        Dear Jane Doe,<br><br>
        Thank you for reaching out to our customer service team. We have received your inquiry and will get back to you within 24-48 hours.<br><br>
        For urgent matters, please feel free to contact us directly at (123) 456-7890.<br><br>
        Best Regards,<br>
        Customer Support Team
    </div>
    <button onclick="copyText1()" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; border: none; border-radius: 5px; cursor: pointer;">Copy Text</button>

    <h2>Click the Button to Copy the Text Below:</h2>
    <div id="copyBox2" style="border: 1px solid #ccc; padding: 10px; width: 100%; height: auto; background-color: #f9f9f9; margin-bottom: 10px;">
        Dear Jane Doe,<br><br>
        Thank you for reaching out to our customer service team. We have received your inquiry and will get back to you within 24-48 hours.<br><br>
        For urgent matters, please feel free to contact us directly at (123) 222.<br><br>
        Best Regards,<br>
        Customer Support Team
    </div>
    <button onclick="copyText2()" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; border: none; border-radius: 5px; cursor: pointer;">Copy Text</button>

    <!-- Updated JavaScript -->
    <script>
        function copyText1() {
            // Get the content from the copyBox1
            var copyBox = document.getElementById('copyBox1');
            var copiedText = copyBox.innerText;

            // Copy the content to clipboard
            var tempTextArea = document.createElement('textarea');
            tempTextArea.value = copiedText;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand('copy');
            document.body.removeChild(tempTextArea);
            alert('Text copied to clipboard!');

            // Now insert the copied text into the correct textarea (comment box)
            var commentTextarea = document.querySelector(".comment-form-comment textarea#comment");
            if (commentTextarea) {
                commentTextarea.value = copiedText;
            }
        }

        function copyText2() {
            // Get the content from the copyBox2
            var copyBox = document.getElementById('copyBox2');
            var copiedText = copyBox.innerText;

            // Copy the content to clipboard
            var tempTextArea = document.createElement('textarea');
            tempTextArea.value = copiedText;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand('copy');
            document.body.removeChild(tempTextArea);
            alert('Text copied to clipboard!');

            // Now insert the copied text into the correct textarea (comment box)
            var commentTextarea = document.querySelector(".comment-form-comment textarea#comment");
            if (commentTextarea) {
                commentTextarea.value = copiedText;
            }
        }
    </script>
