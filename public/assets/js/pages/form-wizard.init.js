!function(e) {
    "use strict";
    var t = function() {};

    t.prototype.createBasic = function(t) {
        return t.children("div")
            .steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                onFinishing: function(t, i) {
                    console.log("Form has been validated!");
                    return !0;
                },
                onFinished: function(t, i) {
                    console.log("Form can be submitted using submit method. E.g. $('#basic-form').submit()");
                    e("#basic-form").submit();
                },
                onStepChanged: function(t, i, e) {
                    // Add CSS class 'current' to the current step
                    e.find('h3').addClass('current');
                    // Remove 'current' class from other steps
                    e.siblings().find('h3').removeClass('current');
                }
            }),
        t;
    },

    t.prototype.createValidatorForm = function(n) {
        return n.validate({errorPlacement: function(t, i) { i.after(t); }}),
        n.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(t, i, e) {
                return n.validate().settings.ignore = ":disabled,:hidden",
                n.valid();
            },
            onFinishing: function(t, i) {
                n.validate().settings.ignore = ":disabled";
                n.valid();
            },
            onFinished: function(t, i) {
                alert("Submitted!");
            },
            onStepChanged: function(t, i, e) {
                // Add CSS class 'current' to the current step
                e.find('h3').addClass('current');
                // Remove 'current' class from other steps
                e.siblings().find('h3').removeClass('current');
            }
        }),
        n;
    },

    t.prototype.createVertical = function(t) {
        return t.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            stepsOrientation: "vertical"
        }),
        t;
    },

    t.prototype.init = function() {
        this.createBasic(e("#basic-form")),
        this.createValidatorForm(e("#wizard-validation-form")),
        this.createVertical(e("#wizard-vertical"));
    },

    e.FormWizard = new t,
    e.FormWizard.Constructor = t;
}(window.jQuery),

function(t) {
    "use strict";
    window.jQuery.FormWizard.init();
}();
