(this["webpackJsonptest-task"]=this["webpackJsonptest-task"]||[]).push([[0],{12:function(e,t,a){},13:function(e,t,a){"use strict";a.r(t);var c=a(0),n=a.n(c),r=a(6),s=a.n(r),l=(a(12),a(1)),o=a(2),i=a(4),m=a(3),u=function(e){Object(i.a)(a,e);var t=Object(m.a)(a);function a(){var e;Object(l.a)(this,a);for(var c=arguments.length,n=new Array(c),r=0;r<c;r++)n[r]=arguments[r];return(e=t.call.apply(t,[this].concat(n))).state={email:"",checkbox:!1,checkResultEmail:{},checkResultCheckbox:{}},e.handleChange=function(t){e.setState({email:t.target.value}),e.checkInput(t.target.value,"")},e.handleChangeCheckbox=function(){e.setState((function(e){return{checkbox:!e.checkbox}})),!1===e.state.checkbox&&e.setState({checkResultCheckbox:{}})},e.handleSubmit=function(t){t.preventDefault(),e.checkInput("","buttonPress"),setTimeout((function(){if(!1===e.state.checkResultEmail.error&&!1===e.state.checkResultCheckbox.error){var t={email:e.state.email};fetch("/php/addEmail.php",{method:"post",headers:{"content-type":"application/json"},body:JSON.stringify(t)}).then((function(e){return e.json()})).then((function(t){console.log(t),!1===t.error?e.props.data(!0):console.log(t)}))}}),200),console.log("run")},e.checkInput=function(t,a){var c=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,n={},r={},s=function(e){n=0===e.length?{error:!0,msg:"Email address is required"}:{error:!1,msg:"Good"}},l=function(e){n=c.test(e)?{error:!1,msg:"Good"}:{error:!0,msg:"Please provide a valid e-mail address"}},o=function(e){c.test(e)&&(n="ca"===e.split(".")[1].toLowerCase()?{error:!0,msg:"We are not accepting subscriptions from Colombia"}:{error:!1,msg:"Good"})};""!==a&&"buttonPress"===a?(function(e){r=e?{error:!1,msg:"Good"}:{error:!0,msg:"You must accept the terms and conditions"}}(e.state.checkbox),s(e.state.email),e.setState({checkResultEmail:n,checkResultCheckbox:r})):(l(t),o(t),e.setState({checkResultEmail:n}))},e}return Object(o.a)(a,[{key:"render",value:function(){var e="input",t="input",a="";void 0!==this.state.checkResultEmail.error&&!0===this.state.checkResultEmail.error&&(e="is-invalid",t="is-invalid-button",a=n.a.createElement("small",{className:"invalid-feedback"},this.state.checkResultEmail.msg));var c="input",r="";void 0!==this.state.checkResultCheckbox.error&&!0===this.state.checkResultCheckbox.error&&(c="is-invalid-checkbox",r=n.a.createElement("small",{className:"invalid-feedback"},this.state.checkResultCheckbox.msg));var s=!0===this.state.checkResultEmail.error||!0===this.state.checkResultCheckbox.error?n.a.createElement("button",{className:t,disabled:!0}," ",n.a.createElement("img",{src:"../images/ic_arrow.png",alt:"arrow"})):n.a.createElement("button",{className:t,onClick:this.handleSubmit}," ",n.a.createElement("img",{src:"../images/ic_arrow.png",alt:"arrow"}));return n.a.createElement("div",null,n.a.createElement("main",{className:"form__field"},n.a.createElement("div",{className:"wecome__msg"},n.a.createElement("h1",null,"Subscribe to newsletter"),n.a.createElement("p",{className:"form__field-p"},"Subscribe to our newsletter and get 10% discount on pineapple glasses.")),n.a.createElement("div",{className:"form__input-container"},n.a.createElement("form",null,n.a.createElement("div",{className:"inputGrup"},n.a.createElement("div",{className:"input__plus-button"},n.a.createElement("input",{type:"email",className:e,onChange:this.handleChange,maxLength:"45",placeholder:"Type your email address here\u2026"}),s),a),n.a.createElement("div",null,n.a.createElement("div",{className:"checkbox__container"},n.a.createElement("div",{className:"round "},n.a.createElement("input",{type:"checkbox",id:"checkbox"}),n.a.createElement("label",{className:c,htmlFor:"checkbox",onClick:this.handleChangeCheckbox}),n.a.createElement("div",{className:"chebox__lable"},"I agree to ",n.a.createElement("a",{href:"1"},"terms of service"))),r)))))," ",n.a.createElement("div",{className:"line__container"},n.a.createElement("hr",{className:"line"})))}}]),a}(n.a.Component),h=function(e){Object(i.a)(a,e);var t=Object(m.a)(a);function a(){return Object(l.a)(this,a),t.apply(this,arguments)}return Object(o.a)(a,[{key:"render",value:function(){return n.a.createElement("div",null," ",n.a.createElement("section",{className:"succes__msg"},n.a.createElement("object",{type:"image/svg+xml",data:"images/ic_success.svg"}," Your browser does not support SVG"),n.a.createElement("div",{className:"succes__msg-text"},n.a.createElement("h1",null,"Thanks for subscribing!"),n.a.createElement("p",null,"You have successfully subscribed to our email listing. Check your email for the discount code."))),n.a.createElement("div",{className:"bring__social_to"},n.a.createElement("hr",{className:"line"})))}}]),a}(n.a.Component),d=function(e){Object(i.a)(a,e);var t=Object(m.a)(a);function a(){var e;Object(l.a)(this,a);for(var c=arguments.length,n=new Array(c),r=0;r<c;r++)n[r]=arguments[r];return(e=t.call.apply(t,[this].concat(n))).state={view:"form"},e.changeView=function(){e.setState({view:"msg"})},e}return Object(o.a)(a,[{key:"render",value:function(){return n.a.createElement("div",null,"msg"===this.state.view?n.a.createElement(h,null):n.a.createElement(u,{data:this.changeView}))}}]),a}(n.a.Component);Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));s.a.render(n.a.createElement(n.a.StrictMode,null,n.a.createElement(d,null)),document.getElementById("root")),"serviceWorker"in navigator&&navigator.serviceWorker.ready.then((function(e){e.unregister()})).catch((function(e){console.error(e.message)}))},7:function(e,t,a){e.exports=a(13)}},[[7,1,2]]]);
//# sourceMappingURL=main.032cf8b9.chunk.js.map