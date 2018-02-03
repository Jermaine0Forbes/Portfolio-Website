/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */
/***/ (function(module, exports) {

var url = window.location.pathname;
var Admin = /** @class */ (function () {
    function Admin() {
        var skills = "admin/skills";
        var home = "admin/portfolio";
        var about = "admin/about";
        if (this.isPage(home)) {
            this.portfolio();
        }
        else if (this.isPage(skills)) {
            this.skills();
        }
        else if (this.isPage(about)) {
            console.log("about page");
        }
        else {
            console.log("somewhere else");
        }
    } //constructor
    Admin.prototype.isPage = function (search) {
        return (url.search(search) >= 0) ? true : false;
    };
    Admin.prototype.portfolio = function () {
        $('[data-toggle="datepicker"]').datepicker();
        function increment(value) {
            return 1 + Number(value);
        }
        function setTotal(id, name, value) {
            $(id + " input[name='" + name + "']").val(value);
        }
        function getNumber(id) {
            return $(id).find("input").last().attr("data-number");
        }
        function addField(container, name, data) {
            var field = "\n             <p>\n                <input class=\"form-control\" type=\"text\" data-number=\"" + data + "\" name=\"" + name + "-" + data + "\" value=\"\">\n             </p>\n            ";
            $(container).append(field);
        }
        var total, frameTotal = setTotal, libTotal = setTotal, langTotal = setTotal, medTotal = setTotal, smallTotal = setTotal, btn = function (value) { return $(value); }, field;
        function updateTotals() {
            frameTotal("#pills-framework", "framework_total", getNumber("#pills-framework"));
            libTotal("#pills-library", "library_total", getNumber("#pills-library"));
            langTotal("#pills-language", "language_total", getNumber("#pills-language"));
            medTotal("#medium", "medium_total", getNumber("#medium"));
            smallTotal("#small", "small_total", getNumber("#small"));
        }
        updateTotals();
        btn("#framework-btn").on("click", function () {
            var num = getNumber("#pills-framework");
            var newNum = increment(num);
            addField("#framework-container", "framework", newNum);
            frameTotal("#pills-framework", "framework_total", newNum);
        });
        btn("#library-btn").on("click", function () {
            var id = "#pills-library", cont = "#library-container", name = "library_total", field = "library", num = getNumber(id), newNum = increment(num);
            addField(cont, field, newNum);
            setTotal(id, name, newNum);
        });
        btn("#language-btn").on("click", function () {
            var id = "#pills-language", cont = "#language-container", name = "language_total", field = "language", num = getNumber(id), newNum = increment(num);
            addField(cont, field, newNum);
            setTotal(id, name, newNum);
        });
        btn("#medium-btn").on("click", function () {
            var id = "#medium", cont = "#medium-container", name = "medium_total", field = "medium", num = getNumber(id), newNum = increment(num);
            addField(cont, field, newNum);
            setTotal(id, name, newNum);
        });
        btn("#small-btn").on("click", function () {
            var id = "#small", cont = "#small-container", name = "small_total", field = "small", num = getNumber(id), newNum = increment(num);
            addField(cont, field, newNum);
            setTotal(id, name, newNum);
        });
    };
    Admin.prototype.skills = function () {
        var rowBtn = $('#add-row');
        function changeNumberRow() {
            var rowNumber = $('tr').last().attr("data-number");
            $('input[name="row"]').val(rowNumber);
        }
        function updateDOM() {
            $('[data-toggle="datepicker"]').datepicker({
                format: "mm-dd-yyyy"
            });
            changeNumberRow();
        }
        function createRow() {
            var result = $('tr').last().attr("data-number");
            var body = $('tbody');
            var next = 1 + Number(result);
            var row = "<tr data-number=\"" + next + "\">\n                <td><input class=\"form-control\" type=\"text\" name=\"name-" + next + "\" value=\"\">  </td>\n                <td>\n                    <select class=\"form-control\" name=\"current-" + next + "\">\n                        <option value=\"0\">False</option>\n                        <option value=\"1\">True</option>\n                    </select>\n                </td>\n                <td>\n                    <select class=\"form-control\" name=\"rank-" + next + "\">\n                        <option value=\"4\">Familiar</option>\n                        <option value=\"3\">Competent</option>\n                        <option value=\"2\">Proficient</option>\n                        <option value=\"1\">Master</option>\n                    </select>\n                 </td>\n                <td>\n                    <select class=\"form-control\" name=\"position-" + next + "\">\n\n                        <option value=\"1\">Front</option>\n                        <option value=\"2\">Back</option>\n                        <option value=\"3\">Other</option>\n                    </select>\n                </td>\n                <td><input data-toggle=\"datepicker\"  class=\"form-control\" type=\"text\" name=\"year-" + next + "\" value=\"\">  </td>\n            </tr>";
            body.append(row);
            updateDOM();
        }
        rowBtn.on('click', createRow);
        updateDOM();
    }; //skills
    return Admin;
}());
var dashboard = new Admin();


/***/ }),
/* 3 */,
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(2);


/***/ })
/******/ ]);