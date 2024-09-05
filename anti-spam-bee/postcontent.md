<div id="copyBox1" style="border: 1px solid #ccc; padding: 10px; width: 100%; height: auto; background-color: #f9f9f9; margin-bottom: 10px;">
    Buy cheap designer handbags, luxury watches, and discount shoes at our online store: spammyshop.com
</div>
<button onclick="copyText1()" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; border: none; border-radius: 5px; cursor: pointer;">Click To Fill Spam Comment Text in Below Form</button>
<div id="copyBox2" style="border: 1px solid #ccc; padding: 10px; width: 100%; height: auto; background-color: #f9f9f9; margin-bottom: 10px;">
As a fellow developer, I found your code snippets incredibly helpful. Keep up the great work!
</div>
<button onclick="copyText2()" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; border: none; border-radius: 5px; cursor: pointer;">Click To Fill Legit Comment Text in Below Form</button>
<script>
    function copyText1() {
            var copyBox = document.getElementById('copyBox1');
            var copiedText = copyBox.innerText;
            var tempTextArea = document.createElement('textarea');
            tempTextArea.value = copiedText;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand('copy');
            document.body.removeChild(tempTextArea);
            alert('The comment form below is already filled with a spam comment. To test whether promotional spam comments are blocked after installing the Anti-Spam Bee plugin, please submit the form. Our free SecureForm 7 plugin automatically prevents such comments from being posted immediately, eliminating the need for manual review by the site owner. SecureForm7 is powered by advanced AI technology from OpenAI.');
            var commentTextarea = document.querySelector(".comment-form-comment textarea#comment");
            if (commentTextarea) {
                commentTextarea.value = copiedText;
            }
    }
    function copyText2() {
            var copyBox = document.getElementById('copyBox2');
            var copiedText = copyBox.innerText;
            var tempTextArea = document.createElement('textarea');
            tempTextArea.value = copiedText;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand('copy');
            document.body.removeChild(tempTextArea);
            alert('Text copied to clipboard!');
            var commentTextarea = document.querySelector(".comment-form-comment textarea#comment");
            if (commentTextarea) {
                commentTextarea.value = copiedText;
            }
    }
</script>
