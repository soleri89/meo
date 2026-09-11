import './bootstrap';

window.addEventListener('DOMContentLoaded', () => {
    const loadingOverlay = document.getElementById('loadingOverlay');
    const uploadForm = document.getElementById('uploadForm');
    const uploadStatus = document.getElementById('uploadStatus');
    const imageInput = document.getElementById('imageInput');

    if (loadingOverlay) {
        window.setTimeout(() => {
            loadingOverlay.classList.add('hidden');
        }, 650);
    }

    if (uploadForm && uploadStatus && imageInput) {
        uploadForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            const file = imageInput.files[0];
            if (!file) {
                uploadStatus.textContent = 'NO FILE SELECTED';
                return;
            }

            const formData = new FormData(uploadForm);
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';
            uploadStatus.textContent = 'UPLOADING...';

            try {
                const response = await fetch(uploadForm.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                const payload = await response.json();

                if (!response.ok || !payload.success) {
                    throw new Error(payload.message || 'UPLOAD FAILED');
                }

                uploadStatus.textContent = 'UPLOAD COMPLETE';

                const imageUrl = payload.path;
                const logoImg = document.querySelector('.m-logo img');
                const logoWrap = document.querySelector('.m-logo');

                if (logoImg) {
                    logoImg.src = imageUrl;
                } else {
                    const img = document.createElement('img');
                    img.src = imageUrl;
                    img.alt = 'Yoshiro Ming Hiroshima portrait';
                    const label = document.createElement('span');
                    label.textContent = 'M';
                    label.style.display = 'none';
                    logoWrap.innerHTML = '';
                    logoWrap.appendChild(img);
                    logoWrap.classList.add('has-image');
                }

                if (logoWrap) {
                    logoWrap.classList.add('has-image');
                }
            } catch (error) {
                uploadStatus.textContent = error.message || 'UPLOAD FAILED';
            }
        });
    }
});
