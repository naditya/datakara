
var form_validation = function() {
    var e = function() {
            jQuery(".form-valide").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    "val-username": {
                        required: !0,
                        minlength: 1
                    },
					"val-nrp": {
                        required: !0,
                        minlength: 1
                    },
					"val-place": {
                        required: !0,
                        minlength: 1
                    },
					"val-tgl": {
                        required: !0,
                        minlength: 1
                    },
					"val-agama": {
                        required: !0,
                        minlength: 1
                    },
					"val-suku": {
                        required: !0,
                        minlength: 1
                    },
					"val-goldar": {
                        required: !0,
                        minlength: 1
                    },
					 "val-status": {
                        required: !0,
                        minlength: 1
                    },
					"val-alamat": {
                        required: !0,
                        minlength: 1
                    },
					"val-pangkat": {
                        required: !0,
                        minlength: 1
                    },
					"val-korps": {
                        required: !0,
                        minlength: 1
                    },
					"val-kesatuan": {
                        required: !0,
                        minlength: 1
                    },
					"val-jabatan": {
                        required: !0,
                        minlength: 1
                    },
					 "val-role": {
                        required: !0,
                        minlength: 1
                    },
					
					"val-nama": {
                        required: !0,
                        minlength: 1
                    },
					"val-nrp": {
                        required: !0,
                        minlength: 1
                    },
					"val-jenis": {
                        required: !0,
                        minlength: 1
                    },
					"val-tlp": {
                        required: !0,
                        minlength: 1
                    },
					"val-alamat": {
                        required: !0,
                        minlength: 1
                    },
                    "val-email": {
                        required: !0,
                        email: !0
                    },
					"val-newpassword": {
                        required: !0,
                        minlength: 5
                    },
                    "val-password": {
                        required: !0,
                        minlength: 5
                    },
                    "val-confirm-password": {
                        required: !0,
                        equalTo: "#val-password"
                    },
                    "val-select2": {
                        required: !0
                    },
                    "val-select2-multiple": {
                        required: !0,
                        minlength: 2
                    },
                    "val-suggestions": {
                        required: !0,
                        minlength: 5
                    },
                    "val-skill": {
                        required: !0
                    },
                    "val-currency": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-website": {
                        required: !0,
                        url: !0
                    },
                    "val-phoneus": {
                        required: !0,
                        phoneUS: !0
                    },
                    "val-digits": {
                        required: !0,
                        digits: !0
                    },
                    "val-number": {
                        required: !0,
                        number: !0
                    },
                    "val-range": {
                        required: !0,
                        range: [1, 5]
                    },
                    "val-terms": {
                        required: !0
                    }
                },
                messages: {
                    "val-username": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-nrp": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-place": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-tgl": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-agama": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-suku": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-goldar": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-alamat": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					 "val-status": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-pangkat": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-korps": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-kesatuan": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					
					 "val-role": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					 "val-jabatan": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-jenis": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					 "val-nama": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-nrp": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
					"val-tlp": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan  karakter"
                    },
					"val-alamat": {
                        required: "Data harus terisi",
                        minlength: "Data harus terisi lebih dari sama dengan 1 karakter"
                    },
                    "val-email": "Inputkan alamat email yang valid!",
					"val-newpassword": {
                        required: "Inputkan Password",
                        minlength: "Password anda harus lebih dari 5 karakter"
                    },
                    "val-password": {
                        required: "Inputkan Password",
                        minlength: "Password anda harus lebih dari 5 karakter"
                    },
                    "val-confirm-password": {
                        required: "Inputkan Password",
                        minlength: "Password anda harus lebih dari 5 karakter",
                        equalTo: "Konfirmasi password anda tidak sesuai"
                    },
                    "val-select2": "Please select a value!",
                    "val-select2-multiple": "Please select at least 2 values!",
                    "val-suggestions": "What can we do to become better?",
                    "val-skill": "Please select a skill!",
                    "val-currency": "Please enter a price!",
                    "val-website": "Please enter your website!",
                    "val-phoneus": "Please enter a US phone!",
                    "val-digits": "Please enter only digits!",
                    "val-number": "Please enter a number!",
                    "val-range": "Please enter a number between 1 and 5!",
                    "val-terms": "You must agree to the service terms!"
                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation.init()
});
