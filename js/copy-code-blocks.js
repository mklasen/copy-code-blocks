document.addEventListener("DOMContentLoaded", function () {
	let codeBlocks = document.querySelectorAll(".wp-block-code");

	[...codeBlocks].forEach(function (block) {
		const copyButton = document.createElement("button");
		copyButton.classList.add("copy-code");
		copyButton.innerText = "Copy code";
		block.appendChild(copyButton);
		block.addEventListener("click", function () {
			navigator.clipboard.writeText(block.querySelector("code").innerText);
			copyButton.classList.add("copied");

			const successText = document.createElement("div");
			successText.classList.add("copy-code-result", "copy-code-success");
			successText.innerText = copy_code_blocks_object.copy_success;

			block.appendChild(successText);

			setTimeout(
				function (successText) {
					successText.classList.add("hide");
					setTimeout(
						function (successText) {
							successText.remove();
						},
						2000,
						successText
					);
				},
				2000,
				successText
			);
		});
	});
});
