var Components = (window.webpackJsonpComponents = window.webpackJsonpComponents || []).push([
    [35], {
        "https://www.etmall.com.tw/Resource/Components/Spinner/Spinner.jsx": function(e, t, o) {
            "use strict";
            o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.define-property.js"), Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0, o("https://www.etmall.com.tw/Resource/Sass/_components/_spinner.scss");
            var a = function() {
                return React.createElement("div", {
                    className: "spinner"
                }, React.createElement("div", {
                    className: "d-flex justify-content-center"
                }, React.createElement("div", {
                    className: "spinnerStyle spinnerDelay1"
                }), React.createElement("div", {
                    className: "spinnerStyle spinnerDelay2"
                }), React.createElement("div", {
                    className: "spinnerStyle spinnerDelay3"
                })))
            };
            t.default = a
        },
        "https://www.etmall.com.tw/Resource/Containers/Home/Home.js": function(e, t, o) {
            "use strict";
            var a = o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/interopRequireDefault.js");
            o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.define-property.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.to-string.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.promise.js"), Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0;
            var n = o("https://www.etmall.com.tw/node_modules/react/index.js-exposed"),
                r = a(o("https://www.etmall.com.tw/Resource/Components/IntersectionObserverBlock/index.js"));
            o("https://www.etmall.com.tw/Scripts/lib/jquery/jquery.jcarousel.min.js");
            var l, c, s, m, i, u, d, p, v, g, S, f, y, R = a(o("https://www.etmall.com.tw/Scripts/jsx/common/ErrorBoundary.jsx")),
                b = a(o("https://www.etmall.com.tw/Scripts/jsx/Home/Components/HourSaleMultiItemBlock.jsx")),
                _ = a(o("https://www.etmall.com.tw/Scripts/jsx/Home/StoreCategory.jsx")),
                h = a(o("https://www.etmall.com.tw/Scripts/jsx/Hooks/UseImgFrameLabel.jsx")),
                j = (0, n.lazy)((function() {
                    return o.e(36).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/HomeBanner.jsx", 7))
                })),
                H = (0, n.lazy)((function() {
                    return o.e(37).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/HomeDaily.jsx", 7))
                })),
                E = (0, n.lazy)((function() {
                    return o.e(72).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/SuperRamActivity.jsx", 7))
                })),
                x = (0, n.lazy)((function() {
                    return Promise.all([o.e(1), o.e(38)]).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/HomeMedia.jsx", 7))
                })),
                N = (0, n.lazy)((function() {
                    return o.e(39).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/HotActivity.jsx", 7))
                })),
                k = (0, n.lazy)((function() {
                    return o.e(79).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/TopTwentySales.jsx", 7))
                })),
                T = (0, n.lazy)((function() {
                    return o.e(64).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/SearchKeyword.jsx", 7))
                })),
                M = (0, n.lazy)((function() {
                    return o.e(93).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/homeactivity.jsx", 7))
                })),
                C = (0, n.lazy)((function() {
                    return o.e(41).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/InformationSection.jsx", 7))
                })),
                w = (0, n.lazy)((function() {
                    return o.e(74).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/SuperStrongPromo.jsx", 7))
                })),
                D = (0, n.lazy)((function() {
                    return o.e(73).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/SuperStrongNormal.jsx", 7))
                })),
                P = (0, n.lazy)((function() {
                    return o.e(18).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/BankPromo.jsx", 7))
                })),
                L = (0, n.lazy)((function() {
                    return o.e(80).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/UserMayLike.jsx", 7))
                })),
                I = (0, n.lazy)((function() {
                    return o.e(70).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/SpecialChoice.jsx", 7))
                })),
                B = (0, n.lazy)((function() {
                    return o.e(82).then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/Home/ViewedHistory.jsx", 7))
                })),
                O = (0, n.lazy)((function() {
                    return Promise.resolve().then(o.t.bind(null, "https://www.etmall.com.tw/Scripts/jsx/global/TopBannerData.jsx", 7))
                })),
                F = null === (l = document.querySelector("#FiveBanner")) || void 0 === l ? void 0 : l.innerHTML,
                A = null === (c = document.querySelector("#InformationSection")) || void 0 === c ? void 0 : c.innerHTML,
                q = null === (s = document.querySelector("#SuperStrongPromo")) || void 0 === s ? void 0 : s.innerHTML,
                z = null === (m = document.querySelector("#SuperStrongNormal")) || void 0 === m ? void 0 : m.innerHTML,
                W = null === (i = document.querySelector("#HomeDailySale")) || void 0 === i ? void 0 : i.innerHTML,
                G = null === (u = document.querySelector("#RightSection")) || void 0 === u ? void 0 : u.innerHTML,
                U = null === (d = document.querySelector("#HotActivity")) || void 0 === d ? void 0 : d.innerHTML,
                J = null === (p = document.querySelector("#TopTwentySales")) || void 0 === p ? void 0 : p.innerHTML,
                $ = null === (v = document.querySelector("#BankPromo")) || void 0 === v ? void 0 : v.innerHTML,
                K = null === (g = document.querySelector("#MonthActivitiesBanner")) || void 0 === g ? void 0 : g.innerHTML,
                V = null === (S = document.querySelector("#SearchKeyword")) || void 0 === S ? void 0 : S.innerHTML,
                X = null === (f = document.querySelector("#HomeActivity")) || void 0 === f ? void 0 : f.innerHTML,
                Q = null === (y = document.querySelector("#StoreCategory")) || void 0 === y ? void 0 : y.innerHTML,
                Y = function() {
                    return React.createElement("div", {
                        className: "FiveBanner",
                        style: {
                            minHeight: "328px"
                        },
                        dangerouslySetInnerHTML: {
                            __html: F
                        }
                    })
                },
                Z = function() {
                    return React.createElement("div", {
                        style: {
                            minHeight: "100px",
                            marginTop: "15px"
                        },
                        dangerouslySetInnerHTML: {
                            __html: A
                        }
                    })
                },
                ee = function() {
                    return React.createElement("div", {
                        style: {
                            minHeight: "480px",
                            marginTop: "20px"
                        },
                        dangerouslySetInnerHTML: {
                            __html: q
                        }
                    })
                },
                te = function() {
                    return React.createElement("div", {
                        style: {
                            minHeight: "345px",
                            marginTop: "20px"
                        },
                        dangerouslySetInnerHTML: {
                            __html: z
                        }
                    })
                },
                oe = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: W
                        }
                    })
                },
                ae = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: G
                        }
                    })
                },
                ne = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: U
                        }
                    })
                },
                re = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: J
                        }
                    })
                },
                le = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: $
                        }
                    })
                },
                ce = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: K
                        }
                    })
                },
                se = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: V
                        }
                    })
                },
                me = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: X
                        }
                    })
                },
                ie = function() {
                    return React.createElement("div", {
                        dangerouslySetInnerHTML: {
                            __html: Q
                        }
                    })
                },
                ue = function() {
                    return React.createElement("div", {
                        style: {
                            minHeight: "492px",
                            minWidth: "685px"
                        }
                    }, "Loading...")
                },
                de = function() {
                    return React.createElement("div", {
                        style: {
                            minHeight: "246px",
                            minWidth: "555px",
                            marginBottom: "15px"
                        }
                    }, "Loading...")
                },
                pe = function() {
                    return React.createElement("div", {
                        style: {
                            minHeight: "231px",
                            minWidth: "555px"
                        }
                    }, "Loading...")
                },
                ve = function(e) {
                    var t = e.HomeBannerData,
                        o = e.HomeDailyData,
                        a = e.HomeMediaData,
                        l = e.isHideTvSchedule,
                        c = e.InformationSectionData,
                        s = e.SuperStrongPromoData,
                        m = e.SuperStrongNormalData,
                        i = e.SuperRamActivityData,
                        u = e.HomeHotActivityData,
                        d = e.TopTwentySalesData,
                        p = e.BankPromoData,
                        v = e.WebHomeMonthActivities,
                        g = e.SearchKeywordData,
                        S = e.HomeActivityData,
                        f = e.HomeStoreElevator,
                        y = (0, h.default)().imgFrameLabel;
                    return React.createElement(React.Fragment, null, React.createElement(n.Suspense, {
                        fallback: React.createElement(Y, null)
                    }, React.createElement(j, {
                        data: t.data,
                        mdata: t.mdata,
                        isShowEHSCoin: t.isShowEHSCoin,
                        todayHotDeals: t.todayHotDeals
                    })), React.createElement("div", {
                        className: "Home-container n-layout--lg"
                    }, React.createElement(R.default, null, React.createElement(n.Suspense, {
                        fallback: React.createElement(Z, null)
                    }, React.createElement("div", {
                        id: "InformationSection",
                        className: "m-top-sm m-bottom-lg"
                    }, React.createElement(C, {
                        isShowEHSCoin: c.isShowEHSCoin,
                        homeMarquee: c.HomeMarquee,
                        webHomeBankPromotion: c.WebHomeBankPromotion,
                        webHomeMemberPromotionArea: c.WebHomeMemberPromotionArea
                    })))), s.WebHomeSuperStrong[0] && React.createElement(R.default, null, React.createElement(n.Suspense, {
                        fallback: React.createElement(ee, null)
                    }, React.createElement("div", {
                        id: "SuperStrongPromo",
                        className: "m-top-lg m-bottom-lg"
                    }, React.createElement(w, {
                        webHomeSuperStrong: s.WebHomeSuperStrong[0]
                    })))), m.WebHomeSuperStrongNormal[0] && React.createElement(R.default, null, React.createElement(n.Suspense, {
                        fallback: React.createElement(te, null)
                    }, React.createElement("div", {
                        id: "SuperStrongNormal",
                        className: "m-bottom-lg m-top-lg"
                    }, React.createElement(D, {
                        webHomeSuperStrongNormal: m.WebHomeSuperStrongNormal[0]
                    })))), React.createElement(R.default, null, React.createElement("div", {
                        className: "m-bottom-lg d-flex"
                    }, React.createElement("div", {
                        id: "HomeDailySale",
                        className: "home-daily-sale"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(oe, null)
                    }, React.createElement(H, {
                        HeaderRender: b.default,
                        HourSaleData: {
                            HourSaleProducts: o.HourSaleProducts,
                            ShopHourSaleProducts: o.ShopHourSaleProducts
                        },
                        systemTime: o.systemTime
                    }))), React.createElement("div", {
                        id: "RightSection",
                        className: "d-flex flex-column m-left-lg"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(ae, null)
                    }, React.createElement("div", {
                        className: "HomeMediaSale"
                    }, React.createElement(x, {
                        LiveProducts: a.LiveProducts,
                        isHideTvSchedule: l
                    })), React.createElement("div", {
                        className: "SuperRamActivitySale"
                    }, React.createElement(E, {
                        webHomeSuperRam: i.WebHomeSuperRam
                    })))))), React.createElement(r.default, null, u.SpecialBanner && u.SpecialBanner.length > 0 && React.createElement(R.default, null, React.createElement("div", {
                        className: "hot-activity m-bottom-lg"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(ne, null)
                    }, React.createElement(N, {
                        SpecialBanner: u.SpecialBanner
                    })))), React.createElement(R.default, null, React.createElement("div", {
                        id: "TopTwentySales",
                        className: "m-bottom-lg"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(re, null)
                    }, React.createElement(k, {
                        RankHeader: d.RankProductInfo.RankHeader,
                        RankContent: d.RankProductInfo.RankContent,
                        promoFrames: null == y ? void 0 : y.promoFrames
                    })))), p.HomeBankWellbeing && p.HomeBankWellbeing.length > 0 && React.createElement(R.default, null, React.createElement("div", {
                        id: "BankPromo",
                        className: "bank-promo m-bottom-lg"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(le, null)
                    }, React.createElement(P, {
                        homeBankWellbeing: p.HomeBankWellbeing
                    })))), React.createElement(r.default, null, v && React.createElement(R.default, null, React.createElement(n.Suspense, {
                        fallback: React.createElement(ce, null)
                    }, React.createElement("div", {
                        id: "MonthActivitiesBanner",
                        className: "home-main-banner m-bottom-lg"
                    }, React.createElement(O, {
                        data: v,
                        categoryTitle: "Home_BN",
                        actionTitle: "Home_BN_Belt",
                        labelTitle: "Home_BN_TopBN"
                    })))), g && React.createElement(R.default, null, React.createElement("div", {
                        id: "SearchKeyword",
                        className: "SearchKeyword m-bottom-lg"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(se, null)
                    }, React.createElement(T, {
                        SearchKeyword: g
                    })))), S.cdata.length > 0 || S.edata.length > 0 ? React.createElement(R.default, null, React.createElement("div", {
                        id: "HomeActivity",
                        className: "HomeActivity"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(me, null)
                    }, React.createElement(M, {
                        cdata: S.cdata,
                        edata: S.edata
                    })))) : null, React.createElement(R.default, null, React.createElement("div", {
                        className: "d-flex m-bottom-lg"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(ue, null)
                    }, React.createElement(L, null)), React.createElement("div", {
                        className: "d-flex flex-column m-left-lg"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(de, null)
                    }, React.createElement("div", {
                        className: "m-bottom-md"
                    }, React.createElement(I, null))), React.createElement(n.Suspense, {
                        fallback: React.createElement(pe, null)
                    }, React.createElement(B, null))))), React.createElement(R.default, null, React.createElement("div", {
                        id: "StoreCategory",
                        className: "m-bottom-lg"
                    }, React.createElement(n.Suspense, {
                        fallback: React.createElement(ie, null)
                    }, React.createElement(_.default, {
                        homeStoreElevator: f,
                        promoFrames: null == y ? void 0 : y.promoFrames
                    })))))), React.createElement("div", {
                        className: "animalInfectiousDiseases"
                    }, React.createElement("a", {
                        href: "https://www.etmall.com.tw/XML/content/DMSetting/Final/209901/SP_1114471/w/index.html",
                        target: "_blank",
                        rel: "noreferrer noopener"
                    }, React.createElement("img", {
                        src: "//media.etmall.com.tw/web/image/common/InfectionPrevention_web.png",
                        alt: "��閧��單�梶��俈瘝餅�苷��",
                        width: "1238",
                        height: "88"
                    })))))
                };
            t.default = ve
        },
        "https://www.etmall.com.tw/Resource/Containers/Home/Index.js": function(e, t, o) {
            "use strict";
            var a = o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/interopRequireDefault.js");
            o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.for-each.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.define-property.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.keys.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/web.dom-collections.for-each.js"), Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var n = {
                Home: !0
            };
            Object.defineProperty(t, "Home", {
                enumerable: !0,
                get: function() {
                    return l.default
                }
            });
            var r = o("https://www.etmall.com.tw/Resource/Containers/Shared/Shared.js");
            Object.keys(r).forEach((function(e) {
                "default" !== e && "__esModule" !== e && (Object.prototype.hasOwnProperty.call(n, e) || e in t && t[e] === r[e] || Object.defineProperty(t, e, {
                    enumerable: !0,
                    get: function() {
                        return r[e]
                    }
                }))
            })), o("https://www.etmall.com.tw/Scripts/lib/youtube/youtube_iframe_api.js");
            var l = a(o("https://www.etmall.com.tw/Resource/Containers/Home/Home.js"));
            o("https://www.etmall.com.tw/Resource/Containers/Home/Style.js")
        },
        "https://www.etmall.com.tw/Resource/Containers/Home/Style.js": function(e, t, o) {
            "use strict";
            o("https://www.etmall.com.tw/Resource/Containers/Shared/Style.js"), o("https://www.etmall.com.tw/Resource/Sass/home.scss")
        },
        "https://www.etmall.com.tw/Resource/Sass/_components/_spinner.scss": function(e, t, o) {},
        "https://www.etmall.com.tw/Resource/Sass/home.scss": function(e, t, o) {},
        "https://www.etmall.com.tw/Resource/Svg/Symbol eager recursive ^\\.\\/.*\\.svg$": function(e, t, o) {
            var a = {
                "https://www.etmall.com.tw/Cart/711.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Cart/711.svg",
                "https://www.etmall.com.tw/Cart/family.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Cart/family.svg",
                "https://www.etmall.com.tw/Cart/hilife.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Cart/hilife.svg",
                "https://www.etmall.com.tw/Cart/okmart.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Cart/okmart.svg",
                "https://www.etmall.com.tw/Home/android-google-play.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/android-google-play.svg",
                "https://www.etmall.com.tw/Home/app-qr-code.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/app-qr-code.svg",
                "https://www.etmall.com.tw/Home/icon-announce-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-announce-svgo.svg",
                "https://www.etmall.com.tw/Home/icon-crazy-grab.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-crazy-grab.svg",
                "https://www.etmall.com.tw/Home/icon-credit-card-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-credit-card-svgo.svg",
                "https://www.etmall.com.tw/Home/icon-etmall-logo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-etmall-logo.svg",
                "https://www.etmall.com.tw/Home/icon-home-media-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-home-media-svgo.svg",
                "https://www.etmall.com.tw/Home/icon-loudspeaker-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-loudspeaker-svgo.svg",
                "https://www.etmall.com.tw/Home/icon-pen-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-pen-svgo.svg",
                "https://www.etmall.com.tw/Home/icon-search-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-search-svgo.svg",
                "https://www.etmall.com.tw/Home/icon-super-ram-activity-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-super-ram-activity-svgo.svg",
                "https://www.etmall.com.tw/Home/icon-top-ranking-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/icon-top-ranking-svgo.svg",
                "https://www.etmall.com.tw/Home/ios-app-store.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Home/ios-app-store.svg",
                "https://www.etmall.com.tw/Main/icon-arrowbottom-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Main/icon-arrowbottom-svgo.svg",
                "https://www.etmall.com.tw/Main/icon-arrowright-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Main/icon-arrowright-svgo.svg",
                "https://www.etmall.com.tw/Main/icon-arrowtop-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Main/icon-arrowtop-svgo.svg",
                "https://www.etmall.com.tw/Main/icon-funnel-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Main/icon-funnel-svgo.svg",
                "https://www.etmall.com.tw/Main/white-logo-ETMall-svg.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Main/white-logo-ETMall-svg.svg",
                "https://www.etmall.com.tw/Shop/Shop-PromoCoin-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-PromoCoin-svgo.svg",
                "https://www.etmall.com.tw/Shop/Shop-arrowDown-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-arrowDown-svgo.svg",
                "https://www.etmall.com.tw/Shop/Shop-discount-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-discount-svgo.svg",
                "https://www.etmall.com.tw/Shop/Shop-logo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-logo.svg",
                "https://www.etmall.com.tw/Shop/Shop-shipping-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-shipping-svgo.svg",
                "https://www.etmall.com.tw/Shop/Shop-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-svgo.svg",
                "https://www.etmall.com.tw/Shop/Shop-trash-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-trash-svgo.svg",
                "https://www.etmall.com.tw/Shop/Shop-truck-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-truck-svgo.svg",
                "https://www.etmall.com.tw/Shop/Shop-wallet-svgo.svg": "https://www.etmall.com.tw/Resource/Svg/Symbol/Shop/Shop-wallet-svgo.svg"
            };

            function n(e) {
                return r(e).then(o)
            }

            function r(e) {
                return Promise.resolve().then((function() {
                    if (!o.o(a, e)) {
                        var t = new Error("Cannot find module '" + e + "'");
                        throw t.code = "MODULE_NOT_FOUND", t
                    }
                    return a[e]
                }))
            }
            n.keys = function() {
                return Object.keys(a)
            }, n.resolve = r, n.id = "https://www.etmall.com.tw/Resource/Svg/Symbol eager recursive ^\\.\\/.*\\.svg$", e.exports = n
        },
        "https://www.etmall.com.tw/Scripts/jsx/Home/Components/HourSaleMultiItemBlock.jsx": function(e, t, o) {
            "use strict";
            var a = o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/interopRequireDefault.js");
            o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.concat.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.map.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.define-property.js"), Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0;
            var n = a(o("https://www.etmall.com.tw/Scripts/jsx/common/CountdownTimer.jsx")),
                r = function(e) {
                    var t = e.ENUM_PERIOD_STATUS,
                        o = e.i18n,
                        a = e.systemTime,
                        r = e.currentSelectType,
                        l = e.currentSession,
                        c = e.currentSessionData,
                        s = e.HourSaleProducts,
                        m = e.hasSession,
                        i = e.currentSelectTypeName,
                        u = e.gaLocation,
                        d = e.handleSessionClick,
                        p = e.handleHourSaleTypeClick,
                        v = function(e) {
                            var t = e.saleType,
                                o = e.category,
                                a = e.action,
                                n = e.label;
                            return function() {
                                p(t), $.fn.sendGaTracking({
                                    category: o,
                                    action: a,
                                    label: n
                                })
                            }
                        };
                    return React.createElement("ul", {
                        className: "n-daily__head multi-item"
                    }, React.createElement("li", {
                        className: "n-daily__title n-title--26 hour-sale p-top-sm ".concat("HourSaleProducts" === r ? "active" : ""),
                        onClick: v({
                            saleType: "HourSaleProducts",
                            category: "".concat(u, "_HourSale"),
                            action: "".concat(u, "_HourSale_��鞉���𧢲濶_Tab"),
                            label: "".concat(u, "_HourSale_��鞉���𧢲濶_Tab")
                        }),
                        title: "��鞉���𧢲濶"
                    }, "��鞉���𧢲濶 ", React.createElement("img", {
                        src: "/Resource/Svg/Activity-hourSale-thunder.svg",
                        alt: "��鞉���𧢲濶���",
                        height: "50",
                        width: "50"
                    })), React.createElement("li", {
                        className: "n-daily__title n-title--26 m-left-sm p-top-sm shop-sale ".concat("ShopHourSaleProducts" === r ? "active" : ""),
                        onClick: v({
                            saleType: "ShopHourSaleProducts",
                            category: "".concat(u, "_HourSale"),
                            action: "".concat(u, "_HourSale_����𡒊�𧢲濶_Tab"),
                            label: "".concat(u, "_HourSale_����𡒊�𧢲濶_Tab")
                        }),
                        title: "����𡒊�𧢲濶"
                    }, "����𡒊�𧢲濶 ", React.createElement("img", {
                        src: "/Resource/Svg/Symbol/Home/icon-crazy-grab.svg",
                        alt: "����𡒊�𧢲濶���",
                        height: "50",
                        width: "50"
                    })), React.createElement("li", {
                        className: "n-daily__counter"
                    }, React.createElement(n.default, {
                        className: {
                            box: "n-count__clock",
                            hour: "n-sp--time",
                            minute: "n-sp--time",
                            second: "n-sp--time",
                            prefix: "n-count__prefix"
                        },
                        i18n: {
                            hour: ":",
                            minute: ":",
                            second: ""
                        },
                        prefix: m && c.Status !== t.NOW ? o.commingSoon : o.remain,
                        start: m ? dayjs(c.StartTime) : 0,
                        end: m ? dayjs(c.EndTime) : 0,
                        systemTime: a
                    })), React.createElement("li", {
                        className: "n-daily__session"
                    }, m && s.map((function(e, t) {
                        var o = dayjs(e.StartTime).format("HH:mm");
                        return React.createElement("div", {
                            key: t,
                            className: "n-daily__session-item ".concat(l === t ? "active" : ""),
                            onClick: d,
                            "data-index": t,
                            "data-category": "".concat(u, "_HourSale"),
                            "data-action": "".concat(u, "_HourSale_").concat(i, "_Timetable"),
                            "data-label": "".concat(u, "_HourSale_").concat(i, "_Timetable_").concat(o)
                        }, "".concat(o, "�聦"))
                    }))), React.createElement("li", {
                        className: "n-daily__more"
                    }, React.createElement("a", {
                        className: "sendGA",
                        href: "/Activity/HourSale?".concat("ShopHourSaleProducts" === r ? "tag=shop" : ""),
                        title: "��𧢲凒憭�",
                        "data-category": "".concat(u, "_HourSale"),
                        "data-action": "".concat(u, "_HourSale_").concat(i, "_More"),
                        "data-label": "".concat(u, "_HourSale_").concat(i, "_More")
                    }, "��𧢲凒憭�")))
                };
            t.default = r
        },
        "https://www.etmall.com.tw/Scripts/jsx/Home/Components/StoreCategoryBlock.jsx": function(e, t, o) {
            "use strict";
            var a = o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/interopRequireDefault.js");
            o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.concat.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.map.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.slice.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.define-property.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.string.link.js"), Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = function(e) {
                var t = e.storeName,
                    o = e.storeLink,
                    a = e.mainImage,
                    n = e.storeColorCode,
                    r = e.leftSectionData,
                    l = e.rightSectionData,
                    c = e.promoFrames,
                    s = void 0 === c ? {} : c;
                return React.createElement("div", {
                    className: "topic-section m-bottom-lg"
                }, React.createElement("div", {
                    className: "head"
                }, React.createElement("div", {
                    className: "section-title d-flex justify-content-between padding-md",
                    style: {
                        backgroundColor: n
                    }
                }, React.createElement("span", {
                    className: "n-title--20"
                }, t), React.createElement("a", {
                    title: "��𧢲凒憭�",
                    href: o,
                    className: "link-more n-title--13--regular d-flex align-items-center sendGA",
                    "data-category": "Home_Dep",
                    "data-action": "Home_Dep_".concat(t, "_More"),
                    "data-label": "Home_Dep_".concat(t, "_More")
                }, React.createElement("span", null, "��𧢲凒憭�"), React.createElement("i", {
                    className: "n-border-arrow--right icon-style m-left-xs"
                })))), React.createElement("div", {
                    className: "content d-flex"
                }, React.createElement("div", {
                    className: "decorate-line",
                    style: {
                        backgroundColor: n
                    }
                }), React.createElement(m, {
                    data: r,
                    storeColorCode: n,
                    storeName: t
                }), React.createElement(i, {
                    data: l,
                    mainImage: a,
                    storeName: t,
                    promoFrames: s
                })))
            };
            var n = a(o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/objectSpread.js")),
                r = a(o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/slicedToArray.js")),
                l = o("https://www.etmall.com.tw/node_modules/react/index.js-exposed"),
                c = a(o("https://www.etmall.com.tw/Scripts/jsx/global/LazyLoadImage.jsx")),
                s = o("https://www.etmall.com.tw/Scripts/jsx/common/PromoImgFrame.jsx");

            function m(e) {
                var t = e.data,
                    o = e.storeColorCode,
                    a = e.storeName,
                    s = (0, l.useState)(0),
                    m = (0, r.default)(s, 2),
                    i = m[0],
                    u = m[1],
                    d = (0, l.useState)((null == t ? void 0 : t[i].logos) ? t[i].logos : []),
                    p = (0, r.default)(d, 2),
                    v = p[0],
                    g = p[1],
                    S = {
                        backgroundColor: "#fff",
                        borderLeft: "5px solid ".concat(o)
                    },
                    f = function(e) {
                        return function() {
                            var o;
                            u(e), g(null === (o = t[e]) || void 0 === o ? void 0 : o.logos)
                        }
                    };
                return React.createElement("div", {
                    className: "section-left d-flex"
                }, React.createElement("ul", {
                    className: "logo-tabs"
                }, null == t ? void 0 : t.slice(0, 10).map((function(e, t) {
                    var o = e.title,
                        r = e.titleLink;
                    return React.createElement("li", {
                        key: t,
                        className: "p-top-md p-bottom-md n-title--13--regular text-center n-cursor-pointer",
                        style: (0, n.default)({}, i === t && S),
                        onMouseEnter: f(t)
                    }, React.createElement("a", {
                        className: "sendGA",
                        href: r,
                        title: o,
                        "data-category": "Home_Dep",
                        "data-action": "Home_Dep_".concat(a, "_").concat(o),
                        "data-label": "Home_Dep_".concat(a, "_").concat(o)
                    }, o))
                }))), React.createElement("div", {
                    className: "logos d-flex flex-column align-items-center p-top-md"
                }, null == v ? void 0 : v.map((function(e, t) {
                    var o = e.imageUrl,
                        n = e.title,
                        r = e.link;
                    return React.createElement("a", {
                        title: n,
                        href: r,
                        key: t,
                        className: "d-block m-bottom-md sendGA",
                        "data-category": "Home_Dep",
                        "data-action": "Home_Dep_".concat(a, "_").concat(n, "_LOGO"),
                        "data-label": "Home_Dep_".concat(a, "_").concat(n, "_LOGO_").concat(n)
                    }, React.createElement(c.default, {
                        width: "90",
                        height: "50",
                        src: o,
                        alt: n
                    }))
                }))))
            }

            function i(e) {
                var t = e.data,
                    o = e.mainImage,
                    a = e.storeName,
                    n = e.promoFrames,
                    r = void 0 === n ? {} : n;
                return React.createElement("div", {
                    className: "section-right main-content d-flex"
                }, React.createElement("a", {
                    title: o.title,
                    href: o.link,
                    className: "sendGA",
                    "data-category": "Home_Dep",
                    "data-action": "Home_Dep_".concat(a, "_BN"),
                    "data-label": "Home_Dep_".concat(a, "_BN_").concat(o.title)
                }, React.createElement(c.default, {
                    height: "480",
                    width: "321",
                    src: o.imageUrl,
                    alt: o.title
                })), React.createElement("div", null, React.createElement("ul", {
                    className: "top-product d-flex"
                }, null == t ? void 0 : t.slice(0, 3).map((function(e, t) {
                    var o = e.id,
                        n = e.title,
                        l = e.finalPrice,
                        m = e.imageUrl,
                        i = e.pageLink,
                        u = "".concat(o).concat(t);
                    return React.createElement("li", {
                        className: "padding-sm",
                        key: u
                    }, React.createElement("a", {
                        title: n,
                        href: i,
                        className: "sendGA",
                        "data-category": "Home_Dep",
                        "data-action": "Home_Dep_".concat(a, "_Prod"),
                        "data-label": "Home_Dep_".concat(a, "_Prod_").concat(o)
                    }, React.createElement("p", {
                        className: "n-title--13-regular m-bottom-sm"
                    }, n), React.createElement("div", {
                        className: "final-price d-flex n-align-items-center m-bottom-md"
                    }, React.createElement("span", {
                        className: "n-title--16"
                    }, React.createElement("span", {
                        className: "n-title--12-regular"
                    }, "$"), utilityJS.numberToCurrency(l))), React.createElement(s.MemoizedPromoImgFrame, {
                        promoFrames: r,
                        promoFrameID: e.PromoFrameID,
                        className: "img-frame__pic--store-category-top"
                    }), React.createElement(c.default, {
                        width: "180",
                        height: "180",
                        src: m,
                        alt: n
                    })))
                }))), React.createElement("ul", {
                    className: "second-product d-flex"
                }, null == t ? void 0 : t.slice(3, 6).map((function(e, t) {
                    var o = e.id,
                        n = e.title,
                        l = e.finalPrice,
                        m = e.imageUrl,
                        i = e.pageLink,
                        u = "".concat(o).concat(t);
                    return React.createElement("li", {
                        className: "padding-sm",
                        key: u
                    }, React.createElement("a", {
                        title: n,
                        href: i,
                        className: "d-block sendGA",
                        "data-category": "Home_Dep",
                        "data-action": "Home_Dep_".concat(a, "_Prod"),
                        "data-label": "Home_Dep_".concat(a, "_Prod_").concat(o)
                    }, React.createElement("p", {
                        className: "n-title--13-regular m-bottom-xs"
                    }, n), React.createElement("div", {
                        className: "d-flex  justify-content-between"
                    }, React.createElement("div", {
                        className: "final-price d-flex n-align-items-end"
                    }, React.createElement("span", {
                        className: "n-title--16"
                    }, React.createElement("span", {
                        className: "n-title--12-regular"
                    }, "$"), utilityJS.numberToCurrency(l))), React.createElement(s.MemoizedPromoImgFrame, {
                        promoFrames: r,
                        promoFrameID: e.PromoFrameID,
                        className: "img-frame__pic--store-category-bottom"
                    }), React.createElement(c.default, {
                        width: "100",
                        height: "100",
                        src: m,
                        alt: n
                    }))))
                })))))
            }
        },
        "https://www.etmall.com.tw/Scripts/jsx/Home/Components/StoreCategoryNav.jsx": function(e, t, o) {
            "use strict";
            var a = o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/interopRequireDefault.js");
            o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.concat.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.map.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.slice.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.define-property.js"), Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0;
            var n = a(o("https://www.etmall.com.tw/Resource/Components/Portal/index.js")),
                r = a(o("https://www.etmall.com.tw/Resource/Hooks/useWindowSize.js")),
                l = function(e) {
                    var t = e.homeStoreElevator,
                        o = e.isShowStoreNav,
                        a = e.currentIndex,
                        l = (0, r.default)().height,
                        c = Math.floor((l - 82) / 48),
                        s = t.length - 1,
                        m = s - c < 0 ? 0 : s - c;
                    return t && React.createElement(n.default, {
                        id: "StoreCategoryNav"
                    }, React.createElement("nav", {
                        className: "topic-nav",
                        style: o ? {
                            visibility: "visible"
                        } : {
                            visibility: "hidden"
                        }
                    }, React.createElement("ul", {
                        className: "text-center"
                    }, t.slice(0, 13).map((function(e, t) {
                        var o = e.Title,
                            n = e.Id;
                        return React.createElement("li", {
                            key: "".concat(o, "-").concat(n),
                            className: "".concat(a === t ? "nav-item-active" : ""),
                            style: t < m ? {
                                display: "none"
                            } : {}
                        }, React.createElement("a", {
                            title: o,
                            className: "d-block py-xs px-sm n-cursor-pointer",
                            onClick: function() {
                                return function(e, t) {
                                    var o = {
                                        category: "Home_Dep",
                                        action: "Home_Dep_Navi",
                                        label: "Home_Dep_Navi_".concat(t)
                                    };
                                    $.fn.sendGaTracking(o);
                                    var a = $("#TopicSection".concat(e)).offset().top - 112;
                                    $("html, body").animate({
                                        scrollTop: a
                                    }, "show")
                                }(t, o)
                            }
                        }, o))
                    })))))
                };
            t.default = l
        },
        "https://www.etmall.com.tw/Scripts/jsx/Home/StoreCategory.jsx": function(e, t, o) {
            "use strict";
            var a = o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/interopRequireDefault.js");
            o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.concat.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.flat.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.iterator.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.map.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.array.unscopables.flat.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.define-property.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.to-string.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.promise.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.string.iterator.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/web.dom-collections.iterator.js"), Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0;
            var n = a(o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/slicedToArray.js")),
                r = o("https://www.etmall.com.tw/node_modules/react/index.js-exposed"),
                l = o("https://www.etmall.com.tw/Scripts/js/common/_ajax.js"),
                c = a(o("https://www.etmall.com.tw/Resource/Components/Spinner/Spinner.jsx")),
                s = a(o("https://www.etmall.com.tw/Scripts/jsx/Home/Components/StoreCategoryBlock.jsx")),
                m = a(o("https://www.etmall.com.tw/Scripts/jsx/Home/Components/StoreCategoryNav.jsx")),
                i = a(o("https://www.etmall.com.tw/Resource/Components/IntersectionObserverBlock/index.js")),
                u = ["storeProductsTop", "storeProductsMiddle", "storeProductsLast"];
            var d = function(e) {
                var t = e.homeStoreElevator,
                    o = e.promoFrames,
                    a = void 0 === o ? {} : o,
                    d = (0, r.useState)(!1),
                    p = (0, n.default)(d, 2),
                    v = p[0],
                    g = p[1],
                    S = (0, r.useState)(!0),
                    f = (0, n.default)(S, 2),
                    y = f[0],
                    R = f[1],
                    b = (0, r.useState)([]),
                    _ = (0, n.default)(b, 2),
                    h = _[0],
                    j = _[1],
                    H = (0, r.useState)(0),
                    E = (0, n.default)(H, 2),
                    x = E[0],
                    N = E[1],
                    k = (0, r.useState)(!1),
                    T = (0, n.default)(k, 2),
                    M = T[0],
                    C = T[1],
                    w = (0, r.useState)([]),
                    D = (0, n.default)(w, 2),
                    P = D[0],
                    L = D[1];

                function I(e) {
                    return (0, l.Fetch)("/Home/GetKanbans", {
                        data: {
                            kanbanTypes: e
                        },
                        progress: {
                            open: function() {},
                            close: function() {}
                        }
                    }, !1)
                }

                function B(e) {
                    h.length > 0 && g(e)
                }(0, r.useEffect)((function() {
                    var e;
                    e = h.map((function(e, t) {
                        return {
                            Id: t + 1,
                            Title: e.storeName
                        }
                    })), L(e)
                }), [h]);
                var O = 0 === h.length ? {} : {
                        rootMargin: "0px 0px -50% 0px"
                    },
                    F = {
                        rootMargin: "0px 0px -70% 0px"
                    };
                return React.createElement("div", {
                    className: "store-category"
                }, React.createElement(i.default, {
                    callback: function() {
                        B(!0)
                    },
                    outCallback: function() {
                        B(!1)
                    },
                    observerOnce: !1,
                    option: O
                }, React.createElement("div", {
                    className: "store-category m-bottom-lg"
                }, h.length > 0 && React.createElement(React.Fragment, null, React.createElement(m.default, {
                    homeStoreElevator: M ? P : t,
                    isShowStoreNav: v,
                    currentIndex: x
                }), null == h ? void 0 : h.map((function(e, t) {
                    var o = e.sections,
                        n = e.products,
                        r = e.storeName,
                        l = e.mainImage,
                        c = e.storeLink,
                        m = e.storeColorCode;
                    return React.createElement("div", {
                        id: "TopicSection".concat(t),
                        key: "".concat(r, "-").concat(t)
                    }, React.createElement(i.default, {
                        callback: function() {
                            N(t)
                        },
                        observerOnce: !1,
                        option: F
                    }), React.createElement(s.default, {
                        storeName: r,
                        storeLink: c,
                        mainImage: l,
                        storeColorCode: m,
                        leftSectionData: o,
                        rightSectionData: n,
                        promoFrames: a
                    }))
                }))), y && React.createElement(i.default, {
                    callback: function() {
                        y && (R(!1), Promise.allSettled([I(u[0]), I(u[1]), I(u[2])]).then((function(e) {
                            var t = e.map((function(e, t) {
                                var o = e.status,
                                    a = e.value,
                                    n = u[t];
                                if ("fulfilled" === o && a[n]) return a[n];
                                C(!0)
                            })).flat();
                            j(t)
                        })))
                    },
                    observerOnce: !0
                }))), h.length > 0 ? null : React.createElement("div", {
                    className: "d-flex n-align-items-center n-justify-content-center py-md"
                }, React.createElement(c.default, null)))
            };
            t.default = d
        },
        "https://www.etmall.com.tw/Scripts/jsx/Hooks/UseImgFrameLabel.jsx": function(e, t, o) {
            "use strict";
            var a = o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/interopRequireDefault.js");
            o("https://www.etmall.com.tw/node_modules/core-js/modules/es.date.to-string.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.define-property.js"), o("https://www.etmall.com.tw/node_modules/core-js/modules/es.object.keys.js"), Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = function() {
                var e = "frameLabelTimestamp",
                    t = (v = e, g = localStorage.getItem(v), JSON.parse(g) || null),
                    o = "frameLabelStorage",
                    a = (0, c.useState)(function(e) {
                        var t = localStorage.getItem(e);
                        return JSON.parse(t) || {}
                    }(o)),
                    i = (0, l.default)(a, 2),
                    u = i[0],
                    d = i[1],
                    p = !0;
                var v, g;
                return (0, c.useEffect)((function() {
                    var a = function() {
                            var e = (0, r.default)(n.default.mark((function e() {
                                var t;
                                return n.default.wrap((function(e) {
                                    for (;;) switch (e.prev = e.next) {
                                        case 0:
                                            return p = !1, e.next = 3, (0, s.Fetch)("/Product/GetPromoFrameAndTag");
                                        case 3:
                                            t = e.sent, (t && "promoTags" in t || "promoFrames" in t) && (d(t), localStorage.setItem(o, JSON.stringify(t)));
                                        case 6:
                                        case "end":
                                            return e.stop()
                                    }
                                }), e)
                            })));
                            return function() {
                                return e.apply(this, arguments)
                            }
                        }(),
                        l = new Date;
                    p && null === t && 0 === Object.keys(u).length && (a(), m(l, e)),
                        function(e, t) {
                            var o = !1;
                            if (t) {
                                o = e.getTime() - t > 18e5
                            }
                            return o
                        }(l, t) && (a(), m(l, e))
                }), []), {
                    imgFrameLabel: u
                }
            };
            var n = a(o("https://www.etmall.com.tw/node_modules/@babel/runtime/regenerator/index.js"));
            o("https://www.etmall.com.tw/node_modules/regenerator-runtime/runtime.js");
            var r = a(o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/asyncToGenerator.js")),
                l = a(o("https://www.etmall.com.tw/node_modules/@babel/runtime/helpers/slicedToArray.js")),
                c = o("https://www.etmall.com.tw/node_modules/react/index.js-exposed"),
                s = o("https://www.etmall.com.tw/Scripts/js/common/_ajax.js");

            function m(e, t) {
                localStorage.setItem(t, JSON.stringify(e.getTime()))
            }
        },
        119: function(e, t, o) {
            e.exports = o("https://www.etmall.com.tw/Resource/Containers/Home/Index.js")
        }
    },
    [
        [119, 0, 2, 1]
    ]
]);