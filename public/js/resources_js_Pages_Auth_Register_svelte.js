"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_Auth_Register_svelte"],{

/***/ "./resources/js/Pages/Auth/Register.svelte":
/*!*************************************************!*\
  !*** ./resources/js/Pages/Auth/Register.svelte ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var svelte_internal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! svelte/internal */ "./node_modules/svelte/internal/index.mjs");
/* harmony import */ var _Shared_Layout_AuthLayout_svelte__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../Shared/Layout/AuthLayout.svelte */ "./resources/js/Shared/Layout/AuthLayout.svelte");
/* harmony import */ var _inertiajs_inertia_svelte__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @inertiajs/inertia-svelte */ "./node_modules/@inertiajs/inertia-svelte/src/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

/* resources/js/Pages/Auth/Register.svelte generated by Svelte v3.44.0 */




function create_default_slot(ctx) {
  var div9;
  var div8;
  var div0;
  var t0;
  var div1;
  var t3;
  var div2;
  var t8;
  var div3;
  var t13;
  var div4;
  var t16;
  var div5;
  var t19;
  var div7;
  var button;
  var t21;
  var div6;
  var small2;
  var t23;
  var a;
  var inertia_action;
  var mounted;
  var dispose;
  return {
    c: function c() {
      div9 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      div8 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      div0 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      div0.innerHTML = "<img src=\"images/icons/icon_auth.png\" alt=\"icon\"/>";
      t0 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      div1 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      div1.innerHTML = "<label for=\"nama\" class=\"form-label\">Nama</label> \n                <input type=\"text\" class=\"form-control\" id=\"nama\"/>";
      t3 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      div2 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      div2.innerHTML = "<label for=\"email\" class=\"form-label\">Email</label> \n                <input type=\"email\" class=\"form-control\" id=\"email\"/> \n                <small class=\"text-muted\">We\u2019ll never share your email with anyone else</small>";
      t8 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      div3 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      div3.innerHTML = "<label for=\"password\" class=\"form-label\">Password</label> \n                <input type=\"password\" class=\"form-control\" id=\"password\"/> \n                <small class=\"text-muted\">Must be 8-20 characters long.</small>";
      t13 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      div4 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      div4.innerHTML = "<label for=\"tgl_lhr\" class=\"form-label\">Tanggal lahir</label> \n                <input type=\"date\" class=\"form-control\" id=\"tgl_lhr\"/>";
      t16 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      div5 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      div5.innerHTML = "<label for=\"no_hp\" class=\"form-label\">No HP</label> \n                <input type=\"text\" class=\"form-control\" id=\"no_hp\"/>";
      t19 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      div7 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      button = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("button");
      button.textContent = "Register";
      t21 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      div6 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      small2 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("small");
      small2.textContent = "Sudah punya akun?";
      t23 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      a = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("a");
      a.textContent = "Login";
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div0, "class", "d-flex justify-content-center mb-3 pt-4 pb-2");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div1, "class", "mb-3");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div2, "class", "mb-3");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div3, "class", "mb-3");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div4, "class", "mb-3");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div5, "class", "mb-3");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(button, "class", "btn btn-e-blue");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(a, "class", "text-e-blue text-decoration-none fw-bold");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(a, "href", "/");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div6, "class", "ms-2");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div7, "class", "mb-3 d-flex align-items-center");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div8, "class", "col-11");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div9, "class", "row justify-content-center mb-5");
    },
    m: function m(target, anchor) {
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.insert)(target, div9, anchor);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div9, div8);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, div0);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, t0);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, div1);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, t3);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, div2);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, t8);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, div3);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, t13);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, div4);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, t16);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, div5);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, t19);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div8, div7);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div7, button);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div7, t21);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div7, div6);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div6, small2);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div6, t23);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div6, a);

      if (!mounted) {
        dispose = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.action_destroyer)(inertia_action = _inertiajs_inertia_svelte__WEBPACK_IMPORTED_MODULE_2__.inertia.call(null, a));
        mounted = true;
      }
    },
    d: function d(detaching) {
      if (detaching) (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.detach)(div9);
      mounted = false;
      dispose();
    }
  };
}

function create_fragment(ctx) {
  var authlayout;
  var current;
  authlayout = new _Shared_Layout_AuthLayout_svelte__WEBPACK_IMPORTED_MODULE_1__["default"]({
    props: {
      title: "Register",
      $$slots: {
        "default": [create_default_slot]
      },
      $$scope: {
        ctx: ctx
      }
    }
  });
  return {
    c: function c() {
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.create_component)(authlayout.$$.fragment);
    },
    m: function m(target, anchor) {
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.mount_component)(authlayout, target, anchor);
      current = true;
    },
    p: function p(ctx, _ref) {
      var _ref2 = _slicedToArray(_ref, 1),
          dirty = _ref2[0];

      var authlayout_changes = {};

      if (dirty &
      /*$$scope*/
      1) {
        authlayout_changes.$$scope = {
          dirty: dirty,
          ctx: ctx
        };
      }

      authlayout.$set(authlayout_changes);
    },
    i: function i(local) {
      if (current) return;
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.transition_in)(authlayout.$$.fragment, local);
      current = true;
    },
    o: function o(local) {
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.transition_out)(authlayout.$$.fragment, local);
      current = false;
    },
    d: function d(detaching) {
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.destroy_component)(authlayout, detaching);
    }
  };
}

var Register = /*#__PURE__*/function (_SvelteComponent) {
  _inherits(Register, _SvelteComponent);

  var _super = _createSuper(Register);

  function Register(options) {
    var _this;

    _classCallCheck(this, Register);

    _this = _super.call(this);
    (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.init)(_assertThisInitialized(_this), options, null, create_fragment, svelte_internal__WEBPACK_IMPORTED_MODULE_0__.safe_not_equal, {});
    return _this;
  }

  return Register;
}(svelte_internal__WEBPACK_IMPORTED_MODULE_0__.SvelteComponent);

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Register);

/***/ }),

/***/ "./resources/js/Shared/Layout/AuthLayout.svelte":
/*!******************************************************!*\
  !*** ./resources/js/Shared/Layout/AuthLayout.svelte ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var svelte_internal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! svelte/internal */ "./node_modules/svelte/internal/index.mjs");
/* harmony import */ var _inertiajs_inertia_svelte__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @inertiajs/inertia-svelte */ "./node_modules/@inertiajs/inertia-svelte/src/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

/* resources/js/Shared/Layout/AuthLayout.svelte generated by Svelte v3.44.0 */



function create_fragment(ctx) {
  var nav;
  var div;
  var span;
  var t0;
  var t1;
  var main;
  var current;
  var default_slot_template =
  /*#slots*/
  ctx[2]["default"];
  var default_slot = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.create_slot)(default_slot_template, ctx,
  /*$$scope*/
  ctx[1], null);
  return {
    c: function c() {
      nav = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("nav");
      div = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("div");
      span = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("span");
      t0 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.text)(
      /*title*/
      ctx[0]);
      t1 = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.space)();
      main = (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.element)("main");
      if (default_slot) default_slot.c();
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(span, "class", "navbar-brand mb-0 h1");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(div, "class", "app-container");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(nav, "class", "navbar navbar-dark bg-dark");
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.attr)(main, "class", "app-container");
    },
    m: function m(target, anchor) {
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.insert)(target, nav, anchor);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(nav, div);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(div, span);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.append)(span, t0);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.insert)(target, t1, anchor);
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.insert)(target, main, anchor);

      if (default_slot) {
        default_slot.m(main, null);
      }

      current = true;
    },
    p: function p(ctx, _ref) {
      var _ref2 = _slicedToArray(_ref, 1),
          dirty = _ref2[0];

      if (!current || dirty &
      /*title*/
      1) (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.set_data)(t0,
      /*title*/
      ctx[0]);

      if (default_slot) {
        if (default_slot.p && (!current || dirty &
        /*$$scope*/
        2)) {
          (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.update_slot_base)(default_slot, default_slot_template, ctx,
          /*$$scope*/
          ctx[1], !current ? (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.get_all_dirty_from_scope)(
          /*$$scope*/
          ctx[1]) : (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.get_slot_changes)(default_slot_template,
          /*$$scope*/
          ctx[1], dirty, null), null);
        }
      }
    },
    i: function i(local) {
      if (current) return;
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.transition_in)(default_slot, local);
      current = true;
    },
    o: function o(local) {
      (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.transition_out)(default_slot, local);
      current = false;
    },
    d: function d(detaching) {
      if (detaching) (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.detach)(nav);
      if (detaching) (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.detach)(t1);
      if (detaching) (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.detach)(main);
      if (default_slot) default_slot.d(detaching);
    }
  };
}

function instance($$self, $$props, $$invalidate) {
  var _$$props$$$slots = $$props.$$slots,
      slots = _$$props$$$slots === void 0 ? {} : _$$props$$$slots,
      $$scope = $$props.$$scope;
  var title = $$props.title;

  $$self.$$set = function ($$props) {
    if ('title' in $$props) $$invalidate(0, title = $$props.title);
    if ('$$scope' in $$props) $$invalidate(1, $$scope = $$props.$$scope);
  };

  return [title, $$scope, slots];
}

var AuthLayout = /*#__PURE__*/function (_SvelteComponent) {
  _inherits(AuthLayout, _SvelteComponent);

  var _super = _createSuper(AuthLayout);

  function AuthLayout(options) {
    var _this;

    _classCallCheck(this, AuthLayout);

    _this = _super.call(this);
    (0,svelte_internal__WEBPACK_IMPORTED_MODULE_0__.init)(_assertThisInitialized(_this), options, instance, create_fragment, svelte_internal__WEBPACK_IMPORTED_MODULE_0__.safe_not_equal, {
      title: 0
    });
    return _this;
  }

  return AuthLayout;
}(svelte_internal__WEBPACK_IMPORTED_MODULE_0__.SvelteComponent);

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (AuthLayout);

/***/ })

}]);