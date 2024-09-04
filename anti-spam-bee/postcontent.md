
<p>Test AntiSpam Bee plugin’s capabilities by entering sample spam and ligitimate comment script in the below WordPress Comment Form.</p>
<h2>Click the Button to Copy the legit comment Below:</h2>
<div id="copyBox" style="border: 1px solid #ccc; padding: 10px; width: 100%; height: auto; background-color: #f9f9f9; margin-bottom: 10px;">
    Dear Jane Doe,
    <br><br>
    Thank you for reaching out to our customer service team. We have received your inquiry and will get back to you within 24-48 hours.
    <br><br>
    For urgent matters, please feel free to contact us directly at (123) 456-7890.
    <br><br>
    Best Regards,
    <br>
    Customer Support Team
</div>
<button onclick="copyText()" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; border: none; border-radius: 5px; cursor: pointer;">Click To Copy Legit Text</button>

<script>
    function copyText() {
        var copyBox = document.getElementById('copyBox');
        var tempTextArea = document.createElement('textarea');
        tempTextArea.value = copyBox.innerText;
        document.body.appendChild(tempTextArea);
        tempTextArea.select();
        document.execCommand('copy');
        document.body.removeChild(tempTextArea);
        alert('Text copied to clipboard!');
    }
</script>
