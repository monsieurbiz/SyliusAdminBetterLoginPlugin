window.mbizAdminBetterLogin = {
    imgToken: 'mbiz_admin_better_login_image',

    run: function (searchTags)
    {
        this.searchTags = searchTags;
        window.addEventListener('DOMContentLoaded', (event) => {
            this.focusLoginOrPassword();
            this.loadImage().then((imgUrl) => {
                this.changeBodyBackground(imgUrl);
            });
        });
    },

    focusLoginOrPassword: function ()
    {
        // Focus on the login or the password
        let loginField = document.getElementById('_username');
        if (loginField.value === "") {
            loginField.focus();
        } else {
            document.getElementById('_password').focus();
        }
    },

    loadImage: function ()
    {
        return new Promise((resolve, reject) => {
            let now = new Date();
            let img = window.localStorage.getItem(this.imgToken);
            if (img !== null) {
                img = JSON.parse(img);
            }
            if (img === null || img.date !== now.toDateString()) {
                this.getNewImage(now).then((img) => {
                    resolve(img.url);
                }).catch(() => {
                    reject();
                });
            } else {
                resolve(img.url);
            }
        });
    },

    getNewImage: function (date) {
        return new Promise((resolve, reject) => {
            let url = "";
            let xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status === 200) {
                    url = xhr.responseURL;
                    let preload = new Image();
                    preload.src = url;

                    let img = {
                        date: date.toDateString(),
                        url: url
                    };
                    window.localStorage.setItem(this.imgToken, JSON.stringify(img));
                    resolve(img);
                } else {
                    reject();
                }
            }.bind(this);
            xhr.open('HEAD', 'https://source.unsplash.com/1600x900/?' + this.searchTags.join(','));
            xhr.send();
        });
    },

    changeBodyBackground: function (imgUrl)
    {
        let bodyStyle = document.body.style;
        bodyStyle.backgroundSize = 'cover';
        bodyStyle.backgroundRepeat = 'no-repeat';
        bodyStyle.backgroundImage = "url('" + imgUrl + "')";
    },

    refresh: function () {
        window.localStorage.removeItem(this.imgToken);
        this.loadImage().then((imgUrl) => {
            this.changeBodyBackground(imgUrl);
        });
        return false;
    }
};
