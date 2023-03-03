(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
    [450],
    {
        4080: function (f, b, a) {
            "use strict";
            a.d(b, {
                p: function () {
                    return r;
                },
            });
            var g = a(5893),
                h = a(7294),
                c = a(9749),
                i = a.n(c),
                j = a(8931),
                k = a(8452),
                d = a(1106),
                l = a.n(d),
                m = a(9160),
                n = a(3999),
                o = a(8421),
                p = a(1443),
                e = a(4184),
                q = a.n(e),
                r = function (a) {
                    var b = a.title,
                        u = a.className,
                        c = a.maxMobile,
                        v = void 0 === c ? 6 : c,
                        d = a.items,
                        w = (0, n.aB)(),
                        e = (0, h.useState)(!0),
                        f = e[0],
                        B = e[1],
                        x = (0, h.useCallback)(function () {
                            B(!1);
                        }, []),
                        r = (0, h.useRef)(null),
                        s = (0, h.useRef)(null),
                        t = (0, h.useRef)(null),
                        y = (0, p.rr)(r),
                        z = (0, p.rr)(s),
                        A = (0, p.rr)(t);
                    return (0, g.jsx)(j.$, {
                        className: q()(u, l().Section),
                        children: (0, g.jsxs)(k.W, {
                            children: [
                                (0, g.jsx)("h2", { ref: s, className: q()(l().Subtitle, l().Trigger, y && l().Triggered_Subtitle), children: "Awards and recognition" }),
                                b && (0, g.jsx)("h3", { ref: r, className: q()(l().Title, m.s.h4, l().Trigger, z && l().Triggered), children: b }),
                                (0, g.jsx)("ol", {
                                    ref: t,
                                    className: q()(l().List, A && l().Triggered),
                                    children: d.map(function (a, d) {
                                        var b = a.business && a.business.logo_small ? a.business.logo_small : a.fallback_logo,
                                            c = a.award_logo;
                                        return (0,
                                        g.jsxs)("li", { className: q()(l().Item, f && w.width <= 1024 && d > v - 1 && l().Item_hidden), children: [b && (0, g.jsx)("div", { className: l().Ico, children: (0, g.jsx)(i(), { unoptimized: !0, src: b.permalink, width: b.width, height: b.height, layout: "intrinsic", loading: "eager", alt: b.alt || "" }) }), c && (0, g.jsx)("div", { className: l().Logo, children: (0, g.jsx)(i(), { unoptimized: !0, src: c.permalink, width: c.width, height: c.height, objectFit: "contain", objectPosition: "center", loading: "eager", alt: c.alt || "" }) }), (0, g.jsxs)("div", { className: l().Text, children: [((a.business && a.business.title) || a.fallback_business_title) && (0, g.jsx)("div", { className: l().Item__Title, dangerouslySetInnerHTML: { __html: a.business ? a.business.title || "" : a.fallback_business_title || "" } }), (0, g.jsx)("div", { className: l().Item__Subtitle, children: a.title })] }), a.year && (0, g.jsx)("div", { className: l().Year, children: a.year })] }, a.id);
                                    }),
                                }),
                                f && w.width <= 1024 && d.length > v && (0, g.jsx)(o.z, { className: l().ShowMore, onClick: x, ariaExpanded: !f, type: "blue-dark", children: "Show More" }),
                            ],
                        }),
                    });
                };
        },
        741: function (f, b, a) {
            "use strict";
            a.d(b, {
                B: function () {
                    return l;
                },
            });
            var g = a(5893),
                h = a(9160),
                c = a(4184),
                i = a.n(c),
                d = a(5675),
                j = a.n(d),
                e = a(4072),
                k = a.n(e),
                l = function (a) {
                    var p = a.componentRef,
                        b = a.image,
                        c = a.imageObjectFit,
                        d = a.imageObjectPosition,
                        e = a.bottomTitle,
                        f = a.bottomText,
                        n = a.button,
                        l = a.sectionTriggered,
                        m = void 0 !== l && l,
                        o = a.imageAlt;
                    return (0, g.jsxs)("div", {
                        className: k().BigCard,
                        ref: function (a) {
                            p && (p.current = a);
                        },
                        children: [
                            b &&
                                (0, g.jsx)("div", {
                                    className: i()(k().ImageWrap, m && k().ImageWrap_Triggered),
                                    children: (0, g.jsx)(j(), {
                                        className: i()(k().Image),
                                        loading: "eager",
                                        width: b.width,
                                        height: b.height,
                                        src: b.permalink,
                                        alt: b.alt || o || "",
                                        unoptimized: !0,
                                        objectFit: (void 0 === c ? "cover" : c) || void 0,
                                        objectPosition: void 0 === d ? "50% 50%" : d,
                                    }),
                                }),
                            (0, g.jsxs)("div", {
                                className: i()(k().BottomBlock, m && k().BottomBlock_Triggered),
                                children: [
                                    (0, g.jsx)("div", { className: k().BottomBlock__Left, children: e && (0, g.jsx)("h3", { className: i()(h.s.h4, k().Title), children: e }) }),
                                    (0, g.jsxs)(h.x, { className: i()(h.s.white, k().BottomBlock__Right), children: [f && (0, g.jsx)("p", { className: i()(h.s.p, k().Text), children: f }), n] }),
                                ],
                            }),
                        ],
                    });
                };
        },
        3282: function (f, b, a) {
            "use strict";
            a.d(b, {
                r: function () {
                    return p;
                },
            });
            var g = a(5893),
                h = a(8931),
                i = a(3999),
                j = a(3477),
                k = a(7294),
                l = a(8452),
                c = a(3936),
                m = a.n(c),
                d = a(4184),
                n = a.n(d),
                e = a(2186),
                o = a.n(e),
                p = function (a) {
                    var p = a.align,
                        b = void 0 === p ? "right" : p,
                        q = a.color,
                        r = void 0 === q ? "white" : q,
                        s = a.mobileLayout,
                        y = a.textBlock,
                        z = a.innerImage,
                        t = a.outerImage,
                        A = a.addititional,
                        B = a.addititionalControls,
                        C = a.imageColumnClassName,
                        D = a.textColumnClassName,
                        u = a.loadedClassName,
                        E = a.className,
                        F = a.chidlren,
                        v = a.containerClassName,
                        w = a.topTitle,
                        c = (0, i.aB)(),
                        x = (0, k.useContext)(j.oA),
                        d = (0, g.jsxs)("div", { className: n()(D, m().Column), children: [B || null, y || null, A || null] }, "textColumn"),
                        f = t
                            ? (0, g.jsx)("div", {
                                  className: n()(m().OuterImage, "right" === b && m().OuterImage_Left, "left" === b && m().OuterImage_Right, x && m().OuterImage_loaded),
                                  children: (0, g.jsx)("div", { className: m().OuterImage__inner, children: t }),
                              })
                            : null,
                        e = (0, g.jsxs)("div", { className: n()(C, m().Column, m().Column_wide), children: [z || null, c.width <= 1024 ? f : null] }, "imgColumn");
                    return (0, g.jsxs)(h.$, {
                        className: n()(E, x && (void 0 === u ? "loaded" : u), m().Hero, "blue" === r && m().Hero_blue, "dark-blue" === r && m().Hero_darkBlue),
                        children: [
                            w && (0, g.jsx)("h1", { className: o().VisuallyHidden, children: w }),
                            "right" === b && c.width > 1024 && f,
                            (0, g.jsx)(l.W, { className: n()(m().Container, v && v), children: c.width > 1024 ? ("left" === b ? [d, e] : [e, d]) : "image-top" === (void 0 === s ? "image-top" : s) ? [e, d] : [d, e] }),
                            "left" === b && c.width > 1024 && f,
                            F,
                        ],
                    });
                };
        },
        8931: function (d, b, a) {
            "use strict";
            a.d(b, {
                $: function () {
                    return g;
                },
            });
            var e = a(5893);
            a(7294);
            var c = a(101),
                f = a.n(c),
                g = function (a) {
                    var b = a.className,
                        g = a.sectionRef,
                        c = a.id,
                        d = a.children;
                    return (0, e.jsx)("section", {
                        ref: function (a) {
                            g && (g.current = a);
                        },
                        className: f().Section + " " + (void 0 === b ? "" : b),
                        id: c,
                        children: d,
                    });
                };
        },
        8921: function (h, c, a) {
            "use strict";
            a.d(c, {
                Zv: function () {
                    return f;
                },
                Q4: function () {
                    return g;
                },
                NI: function () {
                    return l;
                },
            });
            var i = a(5893),
                b = a(7294),
                d = a(4184),
                j = a.n(d),
                e = a(8055),
                k = a.n(e),
                f = (0, b.forwardRef)(function (a, b) {
                    var c = a.businessUnit,
                        d = a.readingTime,
                        e = a.className;
                    return (0,
                    i.jsxs)("p", { className: j()(k().BusinessUnit, e), itemScope: !0, ref: b, children: [(0, i.jsx)("span", { itemProp: "business unit", children: c }), "\xa0\u2014\xa0", (0, i.jsxs)("span", { itemProp: "reading time", children: [d, "\xa0read"] })] });
                });
            f.displayName = "BusinessUnit";
            var g = (0, b.forwardRef)(function (a, b) {
                var c = a.date,
                    d = a.className,
                    e = new Date(c).toLocaleString("en-US", { month: "long", day: "numeric", year: "numeric" });
                return (0, i.jsx)("p", { className: j()(k().Date, d), ref: b, children: e });
            });
            g.displayName = "CaptionDate";
            var l = function (a) {
                var c = a.date,
                    b = a.business,
                    d = a.readingTime,
                    e = a.className;
                return (0, i.jsxs)("div", { className: j()(k().Wrapper, e), children: [(0, i.jsx)(f, { businessUnit: b ? b.title : null, readingTime: d }), (0, i.jsx)(g, { date: c })] });
            };
        },
        5199: function (p, g, a) {
            "use strict";
            a.d(g, {
                eB: function () {
                    return E;
                },
                Kv: function () {
                    return e;
                },
                Cn: function () {
                    return d;
                },
            });
            var d,
                e,
                q = a(5893),
                f = a(7294),
                r = a(5935),
                h = a(9749),
                s = a.n(h),
                i = a(4184),
                t = a.n(i),
                u = a(1443),
                v = a(3999),
                w = a(8474),
                x = a(8921),
                j = a(5178),
                y = a.n(j),
                k = a(2197),
                z = a.n(k),
                l = (0, f.forwardRef)(function (a, m) {
                    var d,
                        n = a.title,
                        o = a.shortDescription,
                        p = a.uri,
                        b = a.image,
                        r = a.date,
                        A = a.business,
                        B = a.readingTime,
                        c = a.isLayoutLoaded,
                        C = (0, v.aB)(),
                        g = C.width,
                        h = (0, f.useRef)(null),
                        D = (0, u.rr)(h) && c,
                        i = (0, f.useRef)(null),
                        E = (0, u.rr)(i) && c,
                        j = (0, f.useRef)(null),
                        F = (0, u.rr)(j) && c,
                        k = (0, f.useRef)(null),
                        G = (0, u.rr)(k) && c,
                        l = (0, f.useRef)(null),
                        H = (0, u.rr)(l) && c,
                        e = g > 1024 || g < 480;
                    return (0,
                    q.jsxs)("figure", { className: z().Wrapper, ref: m, children: [(0, q.jsx)("div", { className: t()(z().Image, D && z().Image_Triggered), ref: h, children: b && (0, q.jsx)(s(), { unoptimized: !0, src: b.permalink, width: e ? void 0 : b.width, height: e ? void 0 : b.height, layout: e ? "fill" : "responsive", objectFit: "cover", loading: "eager", alt: null !== (d = b.alt) && void 0 !== d ? d : "", className: z().Image__Inner, priority: !0 }) }), (0, q.jsxs)("figcaption", { className: z().Text, children: [(0, q.jsx)(x.Zv, { ref: i, businessUnit: A, readingTime: B, className: t()(z().BusinessUnit, E && z().BusinessUnit_Triggered) }), (0, q.jsx)("h2", { className: t()(y().h5, z().Title, F && z().Title_Triggered), ref: j, children: (0, q.jsx)(w.B, { href: p, className: t()(y().h5, z().Title__Link), children: n }) }), (0, q.jsx)("p", { className: t()(y().p, z().Description, G && z().Description_Triggered), ref: k, children: o }), (0, q.jsx)(x.Q4, { ref: l, date: r, className: t()(z().Date, H && z().Date_Triggered) })] })] });
                });
            l.displayName = "Heading";
            var b,
                c,
                m = a(2545),
                A = a.n(m);
            ((b = d || (d = {}))[(b.CARD_SMALL = 0)] = "CARD_SMALL"), (b[(b.CARD_MEDIUM = 1)] = "CARD_MEDIUM"), (b[(b.HEADING = 2)] = "HEADING"), ((c = e || (e = {}))[(c.LIGHT = 0)] = "LIGHT"), (c[(c.DARK = 1)] = "DARK");
            var n = a(6367),
                B = a.n(n),
                o = (0, f.forwardRef)(function (a, D) {
                    var g,
                        h,
                        n = a.title,
                        o = a.uri,
                        c = a.imageAnons,
                        p = a.date,
                        b = a.businessData,
                        r = a.business,
                        v = a.readingTime,
                        i = a.variant,
                        j = a.theme,
                        w = void 0 === j ? e.LIGHT : j,
                        z = a.className,
                        k = a.isAnimated,
                        l = void 0 !== k && k,
                        m = (0, f.useRef)(null),
                        C = l && (0, u.rr)(m);
                    return (0,
                    q.jsx)("a", { href: o, className: t()(B().Link, w === e.DARK && B().Link_Light, z, l && A().Trigger_Top, C && A().Triggered), ref: m, children: (0, q.jsxs)("figure", { className: B().Inner, children: [(0, q.jsx)("div", { className: t()(B().Image, !c && B().Image__Fallback), style: { color: (null == b ? void 0 : b.color) || void 0 }, children: c ? (0, q.jsx)(s(), { unoptimized: !0, src: c.permalink, layout: "fill", objectFit: "cover", objectPosition: "center", loading: "eager", alt: null !== (g = c.alt) && void 0 !== g ? g : "", className: B().Image__Inner }) : b && b.image ? (0, q.jsx)("div", { className: B().Image__InnerFallback, children: (0, q.jsx)(s(), { unoptimized: !0, src: b.image.permalink, layout: "fill", objectFit: "cover", objectPosition: "center", loading: "eager", alt: null !== (h = b.image.alt) && void 0 !== h ? h : "", className: t()(B().Image__Inner, B().Image__Inner_Fallback) }) }) : null }), (0, q.jsxs)("figcaption", { className: t()(B().Caption, i === d.CARD_SMALL && B().Caption_Small), children: [(0, q.jsx)(x.Zv, { businessUnit: r, readingTime: v, className: B().BusinessUnit }), (0, q.jsx)("h3", { className: t()(y()[i === d.CARD_MEDIUM ? "h6" : "p"], B().Title), children: n }), (0, q.jsx)(x.Q4, { date: p, className: B().Date })] })] }) });
                });
            function C(a, b, c) {
                return b in a ? Object.defineProperty(a, b, { value: c, enumerable: !0, configurable: !0, writable: !0 }) : (a[b] = c), a;
            }
            function D(d) {
                for (var a = 1; a < arguments.length; a++) {
                    var c = null != arguments[a] ? arguments[a] : {},
                        b = Object.keys(c);
                    "function" == typeof Object.getOwnPropertySymbols &&
                        (b = b.concat(
                            Object.getOwnPropertySymbols(c).filter(function (a) {
                                return Object.getOwnPropertyDescriptor(c, a).enumerable;
                            })
                        )),
                        b.forEach(function (a) {
                            C(d, a, c[a]);
                        });
                }
                return d;
            }
            o.displayName = "Card";
            var E = function (a) {
                var c = a.variant,
                    e = void 0 === c ? d.CARD_SMALL : c,
                    h = a.uri,
                    i = a.image,
                    j = a.imageAnons,
                    k = a.title,
                    b = a.business,
                    m = a.date,
                    n = a.readingTime,
                    p = a.shortDescription,
                    s = a.theme,
                    t = a.className,
                    u = a.headingRef,
                    f = a.isLayoutLoaded,
                    v = a.isAnimated,
                    g = { uri: h, image: i, imageAnons: j, title: k, businessData: b, business: b && b.title ? (0, r.ZP)(b.title) : void 0, date: m, readingTime: n, className: t };
                switch (e) {
                    case d.CARD_SMALL:
                    case d.CARD_MEDIUM:
                        return (0, q.jsx)(o, D({ variant: e, theme: s }, g, { isAnimated: v }));
                    case d.HEADING:
                        return (0, q.jsx)(l, D({ shortDescription: p, ref: u, isLayoutLoaded: void 0 !== f && f }, g));
                    default:
                        return null;
                }
            };
        },
        7564: function (f, b, a) {
            "use strict";
            a.d(b, {
                V: function () {
                    return r;
                },
            });
            var g = a(5893),
                h = a(6805),
                i = a(9160),
                j = a(3999),
                k = a(1443),
                c = a(4184),
                l = a.n(c),
                m = a(7294),
                n = a(1911),
                o = a(2873),
                d = a(2545),
                p = a.n(d),
                e = a(6724),
                q = a.n(e),
                r = function (d) {
                    var f = d.title,
                        r = d.button,
                        e = d.items,
                        b = (0, j.aB)();
                    n.ZP.use([n.Qr]);
                    var s = (0, m.useState)(null),
                        t = s[0],
                        u = s[1],
                        v = (0, m.useRef)(null),
                        w = (0, m.useRef)(null),
                        a = { title: (0, m.useRef)(null), button: (0, m.useRef)(null), posts: (0, m.useRef)(null) },
                        c = { title: (0, k.rr)(a.title), button: (0, k.rr)(a.button), posts: (0, k.rr)(a.posts) },
                        x = (0, m.useCallback)(
                            function () {
                                null == t || t.slidePrev();
                            },
                            [t]
                        ),
                        y = (0, m.useCallback)(
                            function () {
                                null == t || t.slideNext();
                            },
                            [t]
                        );
                    return (0, g.jsxs)("div", {
                        className: q().Previews,
                        children: [
                            (0, g.jsxs)("div", {
                                className: q().Header,
                                children: [
                                    (0, g.jsx)(i.x, { children: f && (0, g.jsx)("h2", { ref: a.title, className: l()(i.s.h3, q().Title, p().Trigger_Right, c.title && p().Triggered), children: f }) }),
                                    b.width >= 1024 && (0, g.jsx)("div", { ref: a.button, className: l()(p().Trigger_Left, c.button && p().Triggered), children: r }),
                                ],
                            }),
                            (0, g.jsxs)("div", {
                                ref: a.posts,
                                className: l()(q().Items, p().Trigger_Top, c.posts && p().Triggered),
                                children: [
                                    b.width >= 1024 && e,
                                    b.width < 1024 &&
                                        (0, g.jsx)(o.t, {
                                            onSwiper: u,
                                            slidesPerView: 1,
                                            className: q().Swiper,
                                            lazy: { loadPrevNext: !0 },
                                            spaceBetween: 0,
                                            loop: !0,
                                            children: e.map(function (a) {
                                                return (0, g.jsx)(o.o, { className: l()(q().SwiperSlide), children: a }, a.key);
                                            }),
                                        }),
                                    b.width < 1024 &&
                                        e.length > 1 &&
                                        (0, g.jsxs)("div", {
                                            className: q().SliderControls,
                                            children: [
                                                (0, g.jsx)("button", {
                                                    ref: v,
                                                    "aria-label": "Previous preview.",
                                                    onClick: x,
                                                    className: l()(q().SliderControl, q().SliderControl_Left),
                                                    children: (0, g.jsx)(h.CC, { className: q().SliderControl__Icon, type: "arrow" }),
                                                }),
                                                (0, g.jsx)("button", {
                                                    ref: w,
                                                    "aria-label": "Next preview.",
                                                    onClick: y,
                                                    className: l()(q().SliderControl, q().SliderControl_Right),
                                                    children: (0, g.jsx)(h.CC, { className: q().SliderControl__Icon, type: "arrow" }),
                                                }),
                                            ],
                                        }),
                                ],
                            }),
                            b.width < 1024 && (0, g.jsx)("div", { ref: a.button, className: l()(q().Button, p().Trigger_Top, c.button && p().Triggered), children: r }),
                        ],
                    });
                };
        },
        8474: function (j, e, a) {
            "use strict";
            a.d(e, {
                B: function () {
                    return p;
                },
                r: function () {
                    return c;
                },
            });
            var b,
                c,
                k = a(5893),
                f = a(7294),
                g = a(1664),
                l = a.n(g),
                h = a(4184),
                m = a.n(h),
                i = a(5092),
                n = a.n(i);
            function o(a, b, c) {
                return b in a ? Object.defineProperty(a, b, { value: c, enumerable: !0, configurable: !0, writable: !0 }) : (a[b] = c), a;
            }
            ((b = c || (c = {}))[(b.SIMPLE = 0)] = "SIMPLE"), (b[(b.UNDERLINED = 1)] = "UNDERLINED");
            var d = (0, f.forwardRef)(function (a, f) {
                var g = a.href,
                    b = a.variant,
                    d = void 0 === b ? c.SIMPLE : b,
                    h = a.className,
                    i = a.children,
                    j = a.onClick,
                    e = a.outer,
                    p = a.ariaLabel,
                    q = (function (a, d) {
                        if (null == a) return {};
                        var b,
                            c,
                            e = (function (c, f) {
                                if (null == c) return {};
                                var a,
                                    b,
                                    d = {},
                                    e = Object.keys(c);
                                for (b = 0; b < e.length; b++) (a = e[b]), f.indexOf(a) >= 0 || (d[a] = c[a]);
                                return d;
                            })(a, d);
                        if (Object.getOwnPropertySymbols) {
                            var f = Object.getOwnPropertySymbols(a);
                            for (c = 0; c < f.length; c++) (b = f[c]), !(d.indexOf(b) >= 0) && Object.prototype.propertyIsEnumerable.call(a, b) && (e[b] = a[b]);
                        }
                        return e;
                    })(a, ["href", "variant", "className", "children", "onClick", "outer", "ariaLabel"]);
                return (0, k.jsx)(l(), {
                    href: g,
                    children: (0, k.jsx)(
                        "a",
                        (function (d) {
                            for (var a = 1; a < arguments.length; a++) {
                                var c = null != arguments[a] ? arguments[a] : {},
                                    b = Object.keys(c);
                                "function" == typeof Object.getOwnPropertySymbols &&
                                    (b = b.concat(
                                        Object.getOwnPropertySymbols(c).filter(function (a) {
                                            return Object.getOwnPropertyDescriptor(c, a).enumerable;
                                        })
                                    )),
                                    b.forEach(function (a) {
                                        o(d, a, c[a]);
                                    });
                            }
                            return d;
                        })(
                            { ref: f, onClick: j, className: m()(n().Link, d === c.SIMPLE && n().Link_Simple, d === c.UNDERLINED && n().Link_Underlined, h), target: e ? "_blank" : void 0, rel: e ? "noreferrer" : void 0, "aria-label": p },
                            q,
                            { children: i }
                        )
                    ),
                });
            });
            (d.displayName = "Link"), (d.type = c);
            var p = d;
        },
        7962: function (f, b, a) {
            "use strict";
            a.d(b, {
                M: function () {
                    return m;
                },
            });
            var g = a(5893),
                c = a(7294),
                h = a(4658),
                d = a(5276),
                i = a.n(d),
                e = a(4184),
                j = a.n(e),
                k = a(455),
                l = c.useLayoutEffect,
                m = function (a) {
                    var b = a.value,
                        n = a.caption,
                        o = a.className,
                        p = a.captionClassName,
                        q = a.valueClassName,
                        e = a.triggered,
                        r = void 0 === e ? void 0 : e,
                        s = a.additional,
                        v = (0, c.useRef)(0),
                        w = (0, c.useRef)(null),
                        t = (0, c.useRef)(null),
                        x = (0, c.useRef)(!1),
                        f = (0, c.useState)("0"),
                        u = f[0],
                        y = f[1],
                        d = b.includes("$") ? parseFloat(b.substring(1).split(",")[0]) : parseFloat(b.split(",")[0]),
                        z = (b.split("".concat(d))[1], b.split("".concat(d))[1]),
                        m = "".concat(d).split(".")[1],
                        A = m ? m.length : 0;
                    return (
                        (0, c.useEffect)(function () {
                            t.current && !x.current && ((x.current = !0), (t.current.style.minWidth = t.current.clientWidth + "px"));
                        }, []),
                        l(
                            function () {
                                if (r && !w.current)
                                    return (
                                        (w.current = (0, h.Vj)(
                                            { from: 0, to: d, duration: 2, delay: 0, ease: k.pZ.easeOut },
                                            function (a) {
                                                (v.current = a.value), y(v.current.toFixed(A) + z);
                                            },
                                            function () {
                                                t.current && (t.current.style.minWidth = "auto");
                                            }
                                        )),
                                        function () {
                                            w.current && w.current.kill();
                                        }
                                    );
                            },
                            [r]
                        ),
                        (0, g.jsxs)("p", {
                            ref: t,
                            className: j()(i().number, o),
                            children: [(0, g.jsxs)("span", { className: j()(i().value, q), children: [b.includes("$") && "$", u, s] }), (0, g.jsx)("span", { className: j()(i().caption, p), children: n })],
                        })
                    );
                };
        },
        9160: function (e, b, a) {
            "use strict";
            a.d(b, {
                x: function () {
                    return j;
                },
                s: function () {
                    return g();
                },
            });
            var f = a(5893),
                c = a(5178),
                g = a.n(c),
                d = a(4184),
                h = a.n(d),
                i = { inherit: "inherit", white: "#ffffff", blue: "#28377D", darkBlue: "#09263B", blueOrient: "#005980", blueDianne: "#21424E" },
                j = function (a) {
                    var d = a.className,
                        e = a.children,
                        b = a.color,
                        c = void 0 === b ? "inherit" : b,
                        j = { color: i[c] };
                    return (0, f.jsx)("div", { style: j, className: h()(g().Text, "white" === c && g().white, d), children: e });
                };
        },
        1450: function (q, b, a) {
            "use strict";
            a.d(b, {
                S: function () {
                    return p;
                },
                Z: function () {
                    return al;
                },
            });
            var r = a(5893),
                c = a(4184),
                s = a.n(c),
                d = a(5675),
                t = a.n(d),
                u = a(7294),
                v = a(1911),
                w = a(2873),
                x = a(8421),
                y = a(3282),
                z = a(6805),
                A = a(3999),
                B = a(9160),
                e = a(5178),
                C = a.n(e),
                f = a(8675),
                D = a.n(f),
                E = function (j) {
                    var k = j.page,
                        d = (0, u.useState)(null),
                        a = d[0],
                        l = d[1],
                        e = (0, u.useState)(null),
                        f = e[0],
                        m = e[1],
                        g = (0, u.useState)(0),
                        h = g[0],
                        H = g[1],
                        n = (0, u.useRef)(null),
                        o = (0, u.useRef)(null),
                        I = (0, u.useRef)(null),
                        J = (0, u.useRef)(0),
                        p = (0, A.aB)(),
                        q = (0, u.useCallback)(
                            function () {
                                null == a || a.slidePrev(), I.current && window.clearInterval(I.current);
                            },
                            [a]
                        ),
                        E = (0, u.useCallback)(
                            function () {
                                null == a || a.slideNext(), I.current && window.clearInterval(I.current);
                            },
                            [a]
                        ),
                        F = (0, u.useCallback)(
                            function () {
                                a && !a.destroyed && a.slideNext();
                            },
                            [a]
                        );
                    (0, u.useEffect)(
                        function () {
                            a &&
                                !a.destroyed &&
                                (null == a ||
                                    a.on("slideChange", function () {
                                        (J.current = a.realIndex), H(a.realIndex);
                                    }));
                        },
                        [a]
                    ),
                        (0, u.useEffect)(
                            function () {
                                return (
                                    I.current && window.clearInterval(I.current),
                                    (I.current = window.setInterval(F, 1e4)),
                                    function () {
                                        I.current && window.clearInterval(I.current);
                                    }
                                );
                            },
                            [F]
                        );
                    var b = k.slider,
                        c = (0, u.useMemo)(
                            function () {
                                return b.map(function (a, b) {
                                    var c;
                                    return (0,
                                    r.jsx)(w.o, { className: D().Slide, virtualIndex: b, children: (0, r.jsx)(t(), { unoptimized: !0, layout: "fill", objectPosition: "center", objectFit: "cover", src: a.image ? a.image.permalink : "none", alt: (null === (c = a.image) || void 0 === c ? void 0 : c.alt) || "", loading: "eager" }) }, a.title ? a.title + b : b);
                                });
                            },
                            [b]
                        ),
                        i = (0, u.useMemo)(
                            function () {
                                return b.map(function (a, b) {
                                    return a.title
                                        ? (0, r.jsx)(
                                              w.o,
                                              {
                                                  virtualIndex: b,
                                                  className: D().Slide__text,
                                                  children: (0, r.jsxs)(B.x, {
                                                      className: s()(D().Text, C().Text),
                                                      color: "white",
                                                      children: [
                                                          a.title && (0 === b ? (0, r.jsx)("h1", { className: s()(D().Title, C().h4), children: a.title }) : (0, r.jsx)("h2", { className: s()(D().Title, C().h4), children: a.title })),
                                                          a.subtitle && (0, r.jsx)("p", { className: s()(D().Subtitle, C().p), children: a.subtitle }),
                                                          a.button_link &&
                                                              (0, r.jsx)("div", { className: s()(D().Text__button, C().button), children: (0, r.jsx)(x.z, { href: a.button_link.uri, type: "blue-dark", children: a.button_label }) }),
                                                          a.article && (0, r.jsx)("div", { className: s()(D().Text__button, C().button), children: (0, r.jsx)(x.z, { href: a.article.uri, type: "blue-dark", children: "Read More" }) }),
                                                      ],
                                                  }),
                                              },
                                              a.title ? a.title + b : b
                                          )
                                        : null;
                                });
                            },
                            [b]
                        ),
                        G = b.map(function (a, b) {
                            return a.slide_name;
                        });
                    return (
                        v.ZP.use([v.Qr]),
                        (0, u.useEffect)(
                            function () {
                                f && a && f.controller && a.controller && ((f.controller.control = a), (a.controller.control = f));
                            },
                            [f, a]
                        ),
                        (0, u.useEffect)(
                            function () {
                                f && a && (p.width < 1024 ? ((f.allowTouchMove = !0), (a.allowTouchMove = !0)) : ((f.allowTouchMove = !1), (a.allowTouchMove = !1)));
                            },
                            [p.width, f, a]
                        ),
                        (0, r.jsx)(y.r, {
                            color: "dark-blue",
                            className: D().Hero,
                            loadedClassName: D().Hero__Loaded,
                            outerImage: (0, r.jsx)(w.t, { className: D().Slider, lazy: { loadPrevNext: !0 }, onSwiper: l, slideDuplicateActiveClass: "swiper-slide-active", loop: c.length > 1, children: c }),
                            textBlock: (0, r.jsx)(w.t, {
                                className: D().Slider__text,
                                lazy: { loadPrevNext: !0 },
                                onSwiper: m,
                                centeredSlides: !1,
                                spaceBetween: 60,
                                slideDuplicateActiveClass: "swiper-slide-active",
                                loop: i.length > 1,
                                preventClicks: !1,
                                preventClicksPropagation: !1,
                                children: i,
                            }),
                            addititional: (0, r.jsxs)("div", {
                                className: D().Additional,
                                children: [
                                    (0, r.jsxs)("div", {
                                        className: D().Controls,
                                        children: [
                                            (0, r.jsx)(x.z, {
                                                onClick: q,
                                                propRef: n,
                                                ariaLabel: "Slider. Previous Slide",
                                                className: s()(D().Controls__Button),
                                                type: "white-transparent",
                                                layout: "circle",
                                                children: (0, r.jsx)(z.CC, { className: D().Controls__Icon, type: "arrow", direction: "left" }),
                                            }),
                                            (0, r.jsx)(x.z, {
                                                onClick: E,
                                                propRef: o,
                                                ariaLabel: "Slider. Next Slide",
                                                className: s()(D().Controls__Button),
                                                type: "white-transparent",
                                                layout: "circle",
                                                children: (0, r.jsx)(z.CC, { className: D().Controls__Icon, type: "arrow", direction: "right" }),
                                            }),
                                        ],
                                    }),
                                    (0, r.jsxs)("div", {
                                        className: D().SliderData,
                                        children: [
                                            (0, r.jsxs)("div", { className: D().SliderData__counter, children: [(0, r.jsx)("span", { children: h + 1 }), "/", (0, r.jsx)("span", { children: c.length })] }),
                                            (0, r.jsx)("p", { className: D().SliderData__name, children: G[h] }),
                                        ],
                                    }),
                                ],
                            }),
                        })
                    );
                },
                F = a(8931),
                G = a(6496),
                H = a(8452),
                I = a(267),
                g = a(1664),
                J = a.n(g),
                h = a(1514),
                K = a.n(h),
                i = a(8357),
                L = a.n(i),
                M = function (b) {
                    var a = b.page,
                        h = b.data.businesses.map(function (a) {
                            return { id: a.id, website_url: a.website_url, image: a.image, image_hover: a.image_hover, title: a.title, subtitle: a.subtitle, color: a.color, contrast: a.is_text_contrast.value };
                        }),
                        c = (0, u.useRef)(null),
                        i = (0, I.r)(c),
                        d = (0, u.useRef)(null),
                        j = (0, I.r)(d),
                        e = (0, u.useRef)(null),
                        k = (0, I.r)(e),
                        f = (0, u.useRef)(null),
                        l = (0, I.r)(f),
                        g = (0, u.useRef)(null),
                        m = (0, I.r)(g);
                    return (0, r.jsxs)(F.$, {
                        className: L().Section,
                        children: [
                            (0, r.jsxs)(H.W, {
                                className: L().Container,
                                children: [
                                    (0, r.jsxs)(B.x, {
                                        className: L().Text,
                                        children: [
                                            (0, r.jsxs)("h2", {
                                                ref: c,
                                                className: s()(C().h2, L().Title, i && K().Title_Triggered),
                                                children: [
                                                    (0, r.jsx)("span", { className: K().Title__Line, children: "OUR" }),
                                                    (0, r.jsxs)("span", { className: K().Title__Line, children: [(0, r.jsx)("span", { className: s()(K().Title__UnderlineText, L().Title__UnderlineText), children: "" }), "COMPANIES"] }),
                                                ],
                                            }),
                                            (0, r.jsx)("p", { ref: d, className: s()(C().p, L().Subtitle, j && L().Subtitle_Triggered), children: a.businesses_subtitle }),
                                        ],
                                    }),
                                    (0, r.jsxs)("div", {
                                        className: L().Buttons,
                                        children: [
                                            a.businesses_1_button_label &&
                                                a.businesses_1_button_link &&
                                                (0, r.jsx)("div", {
                                                    ref: e,
                                                    className: s()(L().Buttons__First, k && L().Buttons__First_Triggered),
                                                    children: (0, r.jsx)(G.z, { href: a.businesses_1_button_link.uri, type: "blue", children: a.businesses_1_button_label }),
                                                }),
                                            a.businesses_2_button_label &&
                                                a.businesses_2_button_link &&
                                                (0, r.jsx)("div", {
                                                    ref: f,
                                                    className: s()(L().Buttons__Second, l && L().Buttons__Second_Triggered),
                                                    children: (0, r.jsx)(G.z, { href: a.businesses_2_button_link.uri, type: "white", children: a.businesses_2_button_label }),
                                                }),
                                        ],
                                    }),
                                ],
                            }),
                            (0, r.jsx)(H.W, {
                                children: (0, r.jsx)("div", {
                                    ref: g,
                                    className: s()(m && L().BusinessUnits_Triggered, L().BusinessUnits),
                                    children: h.map(function (a, b) {
                                        return (0,
                                        r.jsx)(J(), { href: a.website_url || "#", passHref: !0, children: (0, r.jsxs)("a", { target: "_blank", rel: "noreferrer", className: L().Card, children: [(0, r.jsx)("div", { className: L().Card__LogoWrap, children: a.image && (0, r.jsx)("div", { className: L().Card__Logo, children: (0, r.jsx)(t(), { width: a.image.width / 2, height: a.image.height / 2, loading: "eager", layout: "intrinsic", src: a.image.permalink, alt: a.image.alt || "", unoptimized: !0 }) }) }), (0, r.jsxs)("div", { className: L().Card__Text, children: [a.title && (0, r.jsx)("h3", { className: L().Card__TextTitle, dangerouslySetInnerHTML: { __html: a.title } }), a.subtitle && (0, r.jsx)("p", { className: L().Card__TextDescription, children: a.subtitle }), (0, r.jsx)("div", { className: L().Card__TextUnderline, style: { backgroundColor: a.color || "#ffffff" } })] }), (0, r.jsx)("div", { className: L().Card__Overflow, style: { backgroundColor: a.color || "#ffffff" }, children: (0, r.jsx)("div", { className: L().Card__ImgContainer, children: a.image_hover && (0, r.jsx)(t(), { className: L().Card__Img, width: a.image_hover.width / 2, height: a.image_hover.height / 2, loading: "eager", layout: "intrinsic", src: a.image_hover.permalink, alt: a.image_hover.alt || "", unoptimized: !0 }) }) })] }) }, b);
                                    }),
                                }),
                            }),
                        ],
                    });
                },
                N = a(5846),
                O = a(340),
                P = a(1443),
                Q = a(8261),
                R = 0,
                S = function (a) {
                    var d = a.align,
                        e = a.carouselPosition,
                        f = a.unnormalizedCarouselPosition,
                        g = a.containerWidth,
                        h = a.elements,
                        i = a.gapWidth,
                        b = a.header,
                        j = a.itemWidth,
                        c = a.speed,
                        k = a.totalWidth,
                        l = A.Uh.get().width;
                    b.current && ((R += c / 3500), (R = Math.max(-Math.PI / 2, Math.min(Math.PI / 2, R))), (b.current.style.transform = "translateX(".concat((l / 10) * Math.sin(R), "px) translateZ(0px)"))),
                        (0, Q.l)({ align: d, carouselPosition: e, unnormalizedCarouselPosition: f, containerWidth: g, elements: h, gapWidth: i, itemWidth: j, speed: c, totalWidth: k });
                },
                j = a(2897),
                T = a.n(j);
            function U(a, b, c) {
                return b in a ? Object.defineProperty(a, b, { value: c, enumerable: !0, configurable: !0, writable: !0 }) : (a[b] = c), a;
            }
            var V = function (c) {
                    var a = c.page,
                        g = c.data,
                        h = (0, u.useRef)(null),
                        d = (0, u.useRef)(null),
                        i = (0, P.rr)(d, { offset: [-100, -200], units: ["vh", "px"] }),
                        e = (0, u.useRef)(null),
                        j = (0, P.rr)(e),
                        b = (0, A.aB)(),
                        k = g.brands
                            .map(function (a) {
                                return a.image
                                    ? (0, r.jsx)(
                                          "div",
                                          {
                                              className: T().OurBrands__item,
                                              children: (0, r.jsx)(t(), {
                                                  alt: a.image.alt || a.title || "",
                                                  loading: "eager",
                                                  width: a.image.width,
                                                  height: a.image.height,
                                                  className: T().OurBrands__image,
                                                  unoptimized: !0,
                                                  src: a.image.permalink,
                                              }),
                                          },
                                          a.id
                                      )
                                    : null;
                            })
                            .filter(function (a) {
                                return null !== a;
                            }),
                        f = (0, r.jsxs)("div", {
                            className: s()(T().Controls, b.width < 640 && T().Controls_Mobile),
                            children: [
                                (0, r.jsx)(N.X, {
                                    className: s()(T().Controls__button, T().Controls__button_left),
                                    id: "OurBrands__carousel",
                                    scrollValue: -100,
                                    scrollUnits: "%",
                                    ariaLabel: "Our Brands. Scroll left",
                                    children: (0, r.jsx)(z.CC, { className: T().Controls__Ico, direction: "left", type: "arrow" }),
                                }),
                                (0, r.jsx)(N.X, {
                                    className: s()(T().Controls__button, T().Controls__button_right),
                                    id: "OurBrands__carousel",
                                    scrollValue: 100,
                                    scrollUnits: "%",
                                    ariaLabel: "Our Brands. Scroll right",
                                    children: (0, r.jsx)(z.CC, { className: T().Controls__Ico, direction: "right", type: "arrow" }),
                                }),
                            ],
                        });
                    return (0, r.jsxs)(F.$, {
                        className: T().OurBrands,
                        children: [
                            (0, r.jsxs)(H.W, {
                                className: T().BackgroundContainer,
                                children: [(0, r.jsx)("h2", { role: "presentation", "aria-hidden": "true", ref: h, className: T().OurBrands__title, children: "Our Brands" }), b.width < 640 && f],
                            }),
                            (0, r.jsx)(H.W, {
                                className: T().CarouselContainer,
                                children: (0, r.jsx)("div", {
                                    ref: d,
                                    className: T().CarouselWrapper,
                                    children: (0, r.jsx)(N.l, {
                                        mode: "continuous",
                                        triggered: i,
                                        align: "center",
                                        id: "OurBrands__carousel",
                                        ariaLabel: "Our brands. Use arrow keys to view other brands.",
                                        childrenAnimationFunction: function (a) {
                                            S(
                                                (function (d) {
                                                    for (var a = 1; a < arguments.length; a++) {
                                                        var c = null != arguments[a] ? arguments[a] : {},
                                                            b = Object.keys(c);
                                                        "function" == typeof Object.getOwnPropertySymbols &&
                                                            (b = b.concat(
                                                                Object.getOwnPropertySymbols(c).filter(function (a) {
                                                                    return Object.getOwnPropertyDescriptor(c, a).enumerable;
                                                                })
                                                            )),
                                                            b.forEach(function (a) {
                                                                U(d, a, c[a]);
                                                            });
                                                    }
                                                    return d;
                                                })({}, a, { header: h })
                                            );
                                        },
                                        triggerFunction: O.j7.bounce,
                                        inertionCorrection: !1,
                                        elementsPerScreen: [
                                            { breakpoint: 320, number: 3 },
                                            { breakpoint: 640, number: 4 },
                                            { breakpoint: 1024, number: 5 },
                                            { breakpoint: 1500, number: 6 },
                                            { breakpoint: 1800, number: 8 },
                                        ],
                                        children: k,
                                    }),
                                }),
                            }),
                            (0, r.jsx)(H.W, {
                                children: (0, r.jsxs)("div", {
                                    ref: e,
                                    className: s()(j && T().OurBrandsBottom_triggered, T().OurBrandsBottom),
                                    children: [
                                        a.brands_subtitle && (0, r.jsx)("p", { className: T().OurBrandsBottom__text, children: a.brands_subtitle }),
                                        b.width >= 640 && f,
                                        a.brands_button_label && a.brands_button_link && (0, r.jsx)(x.z, { href: a.brands_button_link.uri, children: a.brands_button_label }),
                                    ],
                                }),
                            }),
                        ],
                    });
                },
                k = a(3479),
                W = a.n(k),
                X = function (h) {
                    var a = h.page,
                        b = function (a) {
                            return { __html: a };
                        },
                        f = (0, u.useRef)(null),
                        i = (0, I.r)(f),
                        d = (0, A.aB)(),
                        e = (0, u.useRef)(null),
                        c = (0, I.r)(e),
                        g = (0, u.useRef)(null),
                        j = (0, I.r)(g, { offset: [-100, -100], units: ["vh", "px"] });
                    return (0, r.jsx)(F.$, {
                        className: W().section,
                        children: (0, r.jsxs)("div", {
                            className: W().Overflow,
                            children: [
                                (0, r.jsx)(H.W, {
                                    className: W().sectionWrap,
                                    children: (0, r.jsxs)("div", {
                                        className: W().left,
                                        children: [
                                            (0, r.jsx)(B.x, { className: W().text, color: "white", children: (0, r.jsx)("h2", { ref: f, className: s()(C().h3, W().title, i && W().title_triggered), children: a.vision_text }) }),
                                            d.width > 1024 &&
                                                (0, r.jsxs)("div", {
                                                    className: W().columns,
                                                    ref: e,
                                                    children: [
                                                        a.vision_left_text && (0, r.jsx)("div", { className: s()(C().p, C().white, W().columns__item, c && W().columns__item_triggered), dangerouslySetInnerHTML: b(a.vision_left_text) }),
                                                        a.vision_right_text && (0, r.jsx)("div", { className: s()(C().p, C().white, W().columns__item, c && W().columns__item_triggered), dangerouslySetInnerHTML: b(a.vision_right_text) }),
                                                    ],
                                                }),
                                        ],
                                    }),
                                }),
                                a.vision_image &&
                                    (0, r.jsx)("div", {
                                        ref: g,
                                        className: s()(W().imgWrap, j && W().imgWrap_triggered),
                                        children: (0, r.jsx)(t(), {
                                            className: W().backImage,
                                            src: a.vision_image.permalink,
                                            loading: "eager",
                                            layout: "fill",
                                            objectFit: "cover",
                                            objectPosition: d.width > 1024 ? "50% 0" : "50% 50%",
                                            alt: a.vision_image.alt || "",
                                            unoptimized: !0,
                                        }),
                                    }),
                                d.width <= 1024 &&
                                    (0, r.jsx)(H.W, {
                                        children: (0, r.jsxs)("div", {
                                            className: W().columns,
                                            ref: e,
                                            children: [
                                                a.vision_left_text && (0, r.jsx)("div", { className: s()(C().p, C().white, W().columns__item, c && W().columns__item_triggered), dangerouslySetInnerHTML: b(a.vision_left_text) }),
                                                a.vision_right_text && (0, r.jsx)("div", { className: s()(C().p, C().white, W().columns__item, c && W().columns__item_triggered), dangerouslySetInnerHTML: b(a.vision_right_text) }),
                                            ],
                                        }),
                                    }),
                            ],
                        }),
                    });
                },
                Y = a(741),
                l = a(8311),
                Z = a.n(l),
                $ = function (d) {
                    var a = d.page,
                        b = (0, u.useRef)(null),
                        c = (0, I.r)(b);
                    return (0, r.jsx)(F.$, {
                        className: Z().Section,
                        children: (0, r.jsx)("div", {
                            className: Z().Overflow,
                            children: (0, r.jsxs)(H.W, {
                                className: Z().Container,
                                children: [
                                    (0, r.jsxs)("h2", {
                                        ref: b,
                                        className: s()(C().h2, Z().Title, c && K().Title_Triggered),
                                        children: [
                                            (0, r.jsxs)("span", {
                                                className: K().Title__Line,
                                                children: ["Grow", (0, r.jsx)("span", { className: s()(K().Title__UnderlineText, Z().Title__underlineText), children: "your" }), " ", (0, r.jsx)("br", {})],
                                            }),
                                            (0, r.jsx)("span", { className: s()(Z()["Title\u0421areer"], K().Title__Line), children: "career" }),
                                        ],
                                    }),
                                    (0, r.jsx)(Y.B, {
                                        image: a.career_image,
                                        bottomText: a.career_right_text,
                                        bottomTitle: a.career_left_text,
                                        button:
                                            a.career_button_label && a.career_button_link
                                                ? (0, r.jsx)(x.z, { href: a.career_button_link.uri, type: "green", outer: !0, ariaLabel: "Learn more about Leadership Development Opportunities", children: a.career_button_label })
                                                : null,
                                        sectionTriggered: c,
                                    }),
                                ],
                            }),
                        }),
                    });
                },
                _ = a(4080),
                m = a(8834),
                aa = a.n(m),
                ab = function (a) {
                    a.page;
                    var b = a.data;
                    return (0, r.jsx)(_.p, { className: aa().Section, title: "Voted one of America\u2019s best large employers", items: b.awards });
                },
                ac = a(7962),
                n = a(323),
                ad = a.n(n),
                ae = function (c) {
                    var a = c.page;
                    c.data;
                    var l = (0, u.useRef)(null);
                    (0, I.r)(l, { offset: [-100, -100], units: ["vh", "px"] });
                    var d = (0, u.useRef)(null),
                        y = (0, I.r)(d),
                        e = (0, u.useRef)(null),
                        f = (0, u.useRef)(null),
                        g = (0, u.useRef)(null),
                        h = (0, u.useRef)(null),
                        i = (0, u.useRef)(null),
                        j = (0, u.useRef)(null),
                        b = (0, u.useRef)(null),
                        m = (0, I.r)(e),
                        n = (0, I.r)(f),
                        o = (0, I.r)(g),
                        p = (0, I.r)(h),
                        q = (0, I.r)(i),
                        v = (0, I.r)(j),
                        k = (0, I.r)(b),
                        w = (0, A.aB)();
                    return (0, r.jsx)(F.$, {
                        className: ad().Section,
                        children: (0, r.jsxs)("div", {
                            className: ad().Overflow,
                            children: [
                                (0, r.jsxs)("div", {
                                    className: ad().Block,
                                    children: [
                                        (0, r.jsx)(H.W, {
                                            className: ad().Container,
                                            children: (0, r.jsx)("div", {
                                                className: ad().Column,
                                                children:
                                                    (a.cares_title || a.cares_text) &&
                                                    (0, r.jsxs)(B.x, {
                                                        className: ad().Block__Text,
                                                        children: [
                                                            a.cares_logo &&
                                                                (0, r.jsx)("div", {
                                                                    ref: b,
                                                                    className: s()(ad().CaresLogoWrapper, ad().Trigger, k && ad().Triggered),
                                                                    children: (0, r.jsx)(t(), {
                                                                        className: ad().CaresLogo,
                                                                        src: a.cares_logo.permalink,
                                                                        alt: a.cares_logo.alt || "",
                                                                        loading: "eager",
                                                                        layout: "fill",
                                                                        objectFit: "contain",
                                                                        objectPosition: "50% 50%",
                                                                        unoptimized: !0,
                                                                    }),
                                                                }),
                                                            a.cares_title && (0, r.jsx)("h2", { ref: e, className: s()(C().h3, ad().LeftTitle, ad().Trigger, m && ad().Triggered), children: a.cares_title }),
                                                            a.cares_text && (0, r.jsx)("p", { ref: f, className: s()(C().p, ad().Trigger, n && ad().Triggered), children: a.cares_text }),
                                                        ],
                                                    }),
                                            }),
                                        }),
                                        a.cares_right_image &&
                                            (0, r.jsx)("div", {
                                                ref: b,
                                                className: s()(ad().ImageWrapper, k && ad().Triggered),
                                                children: (0, r.jsx)(t(), {
                                                    className: ad().Image,
                                                    src: a.cares_right_image.permalink,
                                                    alt: a.cares_right_image.alt || "",
                                                    loading: "eager",
                                                    layout: "fill",
                                                    objectFit: "cover",
                                                    objectPosition: "50% 50%",
                                                    unoptimized: !0,
                                                }),
                                            }),
                                    ],
                                }),
                                (0, r.jsxs)("div", {
                                    className: s()(ad().Block, ad().Block_Left, ad().Block_ShiftTop),
                                    children: [
                                        (0, r.jsx)(H.W, {
                                            className: ad().Container,
                                            children: (0, r.jsx)("div", {
                                                className: ad().Column,
                                                children: (0, r.jsxs)("div", {
                                                    className: ad().Block__Text,
                                                    children: [
                                                        a.cares_numbers_title &&
                                                            (0, r.jsx)(B.x, { children: (0, r.jsx)("h2", { ref: i, className: s()(C().h4, ad().Trigger, q && ad().Triggered, ad().Block__TextTitle), children: a.cares_numbers_title }) }),
                                                        a.cares_numbers_text &&
                                                            (0, r.jsx)(B.x, { children: (0, r.jsx)("p", { ref: j, className: s()(ad().Block__TextText, C().p, ad().Trigger, v && ad().Triggered), children: a.cares_numbers_text }) }),
                                                        a.cares_button_link &&
                                                            a.cares_button_label &&
                                                            (0, r.jsx)("div", {
                                                                ref: g,
                                                                className: s()(C().button, ad().Trigger, o && ad().Triggered),
                                                                children: (0, r.jsx)(x.z, { type: "white", href: a.cares_button_link.uri, children: a.cares_button_label }),
                                                            }),
                                                        a.cares_numbers &&
                                                            (0, r.jsx)("div", {
                                                                ref: d,
                                                                className: ad().Numbers,
                                                                children: a.cares_numbers.map(function (a, b) {
                                                                    return a.number
                                                                        ? (0, r.jsx)(
                                                                              ac.M,
                                                                              { className: ad().Number, captionClassName: ad().Number__Caption, value: a.number, caption: a.description || "", triggered: y },
                                                                              a.number + a.description + b
                                                                          )
                                                                        : null;
                                                                }),
                                                            }),
                                                    ],
                                                }),
                                            }),
                                        }),
                                        a.cares_left_image &&
                                            w.width > 1024 &&
                                            (0, r.jsx)("div", {
                                                ref: h,
                                                className: s()(ad().ImageWrapper, p && ad().Triggered),
                                                children: (0, r.jsx)(t(), {
                                                    className: ad().Image,
                                                    src: a.cares_left_image.permalink,
                                                    alt: a.cares_left_image.alt || "",
                                                    loading: "eager",
                                                    layout: "fill",
                                                    objectFit: "cover",
                                                    objectPosition: "50% 50%",
                                                    unoptimized: !0,
                                                }),
                                            }),
                                    ],
                                }),
                            ],
                        }),
                    });
                },
                af = a(5703),
                o = a(1419),
                ag = a.n(o),
                ah = a(7564),
                ai = a(5199);
            function aj(a, b, c) {
                return b in a ? Object.defineProperty(a, b, { value: c, enumerable: !0, configurable: !0, writable: !0 }) : (a[b] = c), a;
            }
            var ak = function (a) {
                    var b = a.data,
                        c = (0, u.useMemo)(
                            function () {
                                return b.articles.map(function (a) {
                                    return (0, af.z)(a);
                                });
                            },
                            [b.articles]
                        );
                    return (0, r.jsx)(F.$, {
                        className: ag().Wrapper,
                        children: (0, r.jsx)(H.W, {
                            children: (0, r.jsx)(ah.V, {
                                title: "Recent stories",
                                button: (0, r.jsx)(x.z, { href: "/newsroom", type: "gray-default", outer: !0, className: ag().Button, children: "Visit Our Newsroom" }),
                                items: c.slice(0, 3).map(function (a) {
                                    return (0, r.jsx)(
                                        ai.eB,
                                        (function (d) {
                                            for (var a = 1; a < arguments.length; a++) {
                                                var c = null != arguments[a] ? arguments[a] : {},
                                                    b = Object.keys(c);
                                                "function" == typeof Object.getOwnPropertySymbols &&
                                                    (b = b.concat(
                                                        Object.getOwnPropertySymbols(c).filter(function (a) {
                                                            return Object.getOwnPropertyDescriptor(c, a).enumerable;
                                                        })
                                                    )),
                                                    b.forEach(function (a) {
                                                        aj(d, a, c[a]);
                                                    });
                                            }
                                            return d;
                                        })({ variant: ai.Cn.CARD_SMALL, theme: ai.Kv.DARK }, a)
                                    );
                                }),
                            }),
                        }),
                    });
                },
                p = function (c) {
                    var b = c.page,
                        a = c.data;
                    return (0, r.jsxs)(r.Fragment, {
                        children: [
                            (0, r.jsx)(E, { page: b, data: a }),
                            (0, r.jsx)(M, { page: b, data: a }),
                            (0, r.jsx)(V, { page: b, data: a }),
                            (0, r.jsx)(X, { page: b, data: a }),
                            (0, r.jsx)($, { page: b, data: a }),
                            (0, r.jsx)(ab, { page: b, data: a }),
                            (0, r.jsx)(ae, { page: b, data: a }),
                            (0, r.jsx)(ak, { data: a }),
                        ],
                    });
                },
                al = p;
        },
        8261: function (c, b, a) {
            "use strict";
            a.d(b, {
                l: function () {
                    return f;
                },
            });
            var d = a(3999),
                e = function (e, f, b) {
                    var a, c, d;
                    return (b = ((c = 0), (d = 1), (a = (b - e) / (f - e)) < c && (a = c), a > d && (a = d), a)) * b * (3 - 2 * b);
                },
                f = function (a) {
                    var f = a.carouselPosition,
                        g = a.containerWidth,
                        c = a.elements,
                        h = a.align,
                        b = d.Uh.get().width,
                        i = b > 1500 ? 500 : b > 1024 ? 300 : b > 640 ? 200 : 0;
                    c.forEach(function (a) {
                        a.ref.current &&
                            a.compositeAnimationRef.current &&
                            (b <= 640
                                ? a.compositeAnimationRef.current.set("CarouselItemAnimation", { opacity: 1 })
                                : "center" === h
                                ? a.compositeAnimationRef.current.set("CarouselItemAnimation", { opacity: e(-g / 2 - i / 2, -g / 2 + i / 2, a.position + f) * (1 - e(g / 2 - i / 2, g / 2 + i / 2, a.position + f)) })
                                : "left" === h && a.compositeAnimationRef.current.set("CarouselItemAnimation", { opacity: e(-i, 0, a.position + f) * (1 - e(g, g + i, a.position + f)) }));
                    });
                };
        },
        340: function (d, b, a) {
            "use strict";
            a.d(b, {
                xd: function () {
                    return c;
                },
                j7: function () {
                    return i;
                },
            });
            var e = a(3999),
                f = a(4658),
                g = a(455),
                h = a(5699),
                c = function () {},
                i = {
                    none: c,
                    bounce: function (a) {
                        var d = a.carouselPosition,
                            b = (a.containerWidth, a.elements),
                            i = (a.gapWidth, a.totalWidth, a.align, a.triggered),
                            c = a.immidiate,
                            j = e.Uh.get().width,
                            k = c ? 0 : 1,
                            l = function (a, b, c) {
                                a.compositeAnimationRef.current && a.compositeAnimationRef.current.set("carousel-trigger", { opacity: b, transform: { y: c.value } });
                            };
                        b.forEach(function (c) {
                            var a,
                                b = c.position + d;
                            i
                                ? null ===
                                      (a = (0, f.Vj)({ from: 137, to: -15, delay: Math.abs(b / j) * k, duration: 1.45 * k, ease: (0, h.Z)(0.82, 0, 0.66, 0.99) }, function (a) {
                                          l(c, a.easeProgress, a);
                                      }).promise) ||
                                  void 0 === a ||
                                  a
                                      .then(function () {
                                          return (0, f.Vj)({ from: -15, to: 7, delay: 0, duration: 0.5 * k, ease: (0, h.Z)(0.28, 0, 0.55, 1) }, function (a) {
                                              l(c, 1, a);
                                          }).promise;
                                      })
                                      .then(function () {
                                          return (0, f.Vj)({ from: 7, to: 0, delay: 0, duration: 0.85 * k, ease: (0, h.Z)(0.31, 0, 0.33, 1) }, function (a) {
                                              l(c, 1, a);
                                          }).promise;
                                      })
                                : (0, f.Vj)({ from: 0, to: 200, delay: Math.abs(b / j) * k, duration: 2.3 * k, ease: g.pZ.easeIn }, function (a) {
                                      l(c, 1 - a.easeProgress, a);
                                  });
                        });
                    },
                };
        },
        7066: function (f, c, a) {
            "use strict";
            a.d(c, {
                lr: function () {
                    return A;
                },
                jl: function () {
                    return y;
                },
            });
            var g = a(5893),
                b = a(7294),
                h = a(3999),
                i = a(9466),
                j = a(4658),
                k = b.useLayoutEffect,
                l = function (a) {
                    var e = a.fake,
                        c = a.children,
                        f = a.compositeAnimationRef,
                        h = a.className,
                        m = a.carouselItemRef,
                        l = a.style,
                        n = (0, b.useRef)(null),
                        d = (0, b.useRef)();
                    return (
                        (0, b.useEffect)(
                            function () {
                                if (n.current) {
                                    var a = (0, i.F)(n.current);
                                    return (
                                        e &&
                                            a.forEach(function (a) {
                                                a.setAttribute("tabindex", "-1");
                                            }),
                                        function () {
                                            e &&
                                                a.forEach(function (a) {
                                                    a.setAttribute("tabindex", "0");
                                                });
                                        }
                                    );
                                }
                            },
                            [e, c]
                        ),
                        d.current && (f.current = d.current),
                        k(function () {
                            n.current && (d.current || ((d.current = new j.MS({ element: n.current })), (f.current = d.current)));
                        }),
                        (0, g.jsx)("div", {
                            ref: function (a) {
                                (m.current = a), (n.current = a);
                            },
                            className: h,
                            style: l,
                            children: c,
                        })
                    );
                },
                m = function b(a) {
                    "use strict";
                    var c = this;
                    !(function (a, b) {
                        if (!(a instanceof b)) throw new TypeError("Cannot call a class as a function");
                    })(this, b),
                        (this.destroy = function () {}),
                        (this.resize = function () {
                            if (c.container) {
                                var a,
                                    d = h.Uh.get().width;
                                c.resizeElements &&
                                    ((a = c.elementsPerScreen.reduce(function (b, a) {
                                        return a.breakpoint < d ? a : b;
                                    }).number),
                                    (c.itemWidth = Math.floor(Math.min(c.maximumItemWidth, (c.outerWrapper.clientWidth - c.gap * (a - 1)) / a))));
                                var e = "px" === c.paddingUnits ? c.padding : "%" === c.paddingUnits ? (c.container.clientWidth * c.padding) / 100 : "vw" === c.paddingUnits ? d * c.padding : 0;
                                a = Math.floor((c.outerWrapper.clientWidth + e) / (c.itemWidth + c.gap)) + 1;
                                var f = (c.itemWidth + c.gap) * c.total,
                                    b = a,
                                    g = -b * (c.itemWidth + c.gap);
                                return { containerWidth: c.outerWrapper.clientWidth, itemWidth: c.itemWidth, gapWidth: c.gap, totalWidth: f, leftShift: g, numberOfFakeElements: b };
                            }
                        }),
                        (this.gap = a.gap),
                        (this.outerWrapper = a.outerWrapper),
                        (this.container = a.container),
                        (this.elementsPerScreen = a.elementsPerScreen),
                        (this.resizeElements = a.resizeElements),
                        (this.padding = a.padding),
                        (this.paddingUnits = a.paddingUnits),
                        (this.itemWidth = a.itemWidth),
                        (this.maximumItemWidth = a.maximumItemWidth),
                        (this.total = a.total);
                },
                n = function b(a) {
                    "use strict";
                    var c = this;
                    !(function (a, b) {
                        if (!(a instanceof b)) throw new TypeError("Cannot call a class as a function");
                    })(this, b),
                        (this.destroy = function () {}),
                        (this.resize = function () {
                            if (c.container) {
                                var d = h.Uh.get().width;
                                if (c.resizeElements) {
                                    var a = c.elementsPerScreen.reduce(function (b, a) {
                                        return a.breakpoint < d ? a : b;
                                    }).number;
                                    c.itemWidth = Math.floor(Math.min(c.maximumItemWidth, (c.outerWrapper.clientWidth - c.gap * (a - 1)) / a));
                                }
                                var b = (c.itemWidth + c.gap) * (c.total - 1) + c.itemWidth;
                                return { containerWidth: c.outerWrapper.clientWidth, itemWidth: c.itemWidth, gapWidth: c.gap, totalWidth: b, leftShift: 0, numberOfFakeElements: 0 };
                            }
                        }),
                        (this.gap = a.gap),
                        (this.outerWrapper = a.outerWrapper),
                        (this.container = a.container),
                        (this.elementsPerScreen = a.elementsPerScreen),
                        (this.resizeElements = a.resizeElements),
                        (this.itemWidth = a.itemWidth),
                        (this.maximumItemWidth = a.maximumItemWidth),
                        (this.total = a.total);
                },
                o = a(455),
                p = function b(a) {
                    "use strict";
                    var c = this;
                    !(function (a, b) {
                        if (!(a instanceof b)) throw new TypeError("Cannot call a class as a function");
                    })(this, b),
                        (this.previousDragPosition = void 0),
                        (this.speed = 0),
                        (this.delta = 0),
                        (this.isDragActive = !1),
                        (this.isAnimationActive = !1),
                        (this.isAnimationLocked = !1),
                        (this.dragPosition = 0),
                        (this.speedCorrection = 0),
                        (this.previousDeviation = 0),
                        (this.destroy = function () {
                            c.tween && c.tween.kill(), c.loopFunction.kill();
                        }),
                        (this.loop = function () {
                            c.isDragActive
                                ? (void 0 !== c.previousDragPosition ? (c.speed = c.previousDragPosition - c.dragPosition) : ((c.speed = 0), (c.speedCorrection = 0)), (c.previousDragPosition = c.dragPosition))
                                : c.isAnimationActive
                                ? ((c.speed = 0), (c.speedCorrection = 0))
                                : ((c.speed = c.interpolationFunction(c.speed, 0, c.inertionDecay)), 0.005 > Math.abs(c.speed) && (c.speed = 0), c.correction && c.correctSpeed());
                            var a = c.localCarouselPosition;
                            (c.localCarouselPosition -= c.speed),
                                !c.isDragActive &&
                                    "simple" === c.mode &&
                                    (c.localCarouselPosition > 0
                                        ? (c.localCarouselPosition = c.interpolationFunction(c.localCarouselPosition, 0, c.inertionDecay / 3))
                                        : c.localCarouselPosition < -(c.sizes.totalWidth - c.sizes.containerWidth) &&
                                          (c.localCarouselPosition = c.interpolationFunction(c.localCarouselPosition, -(c.sizes.totalWidth - c.sizes.containerWidth), c.inertionDecay / 3))),
                                (c.delta = c.localCarouselPosition - a),
                                c.callback({ position: c.localCarouselPosition, delta: c.localCarouselPosition - a });
                        }),
                        (this.correctSpeed = function () {
                            if ("continuous" === c.mode || ("simple" === c.mode && c.localCarouselPosition < 0 && c.localCarouselPosition > -(c.sizes.totalWidth - c.sizes.containerWidth))) {
                                for (var b = 0, e = c.speed, f = c.localCarouselPosition + e; Math.abs(e) >= 0.02 || b < 100; ) b++, (f -= e = c.interpolationFunction(e, 0, c.inertionDecay));
                                b = 0;
                                for (var g = c.speedCorrection; Math.abs(g) >= 0.02 || b < 100; ) b++, (f -= g = c.interpolationFunction(g, c.previousDeviation, c.inertionDecay));
                                var d = c.sizes.itemWidth + c.sizes.gapWidth,
                                    a = f % d;
                                a > 0.5 * d ? (a -= d) : a <= -(0.5 * d) && (a += d), 0.1 > Math.abs(a) && (a = 0), (c.speedCorrection = c.interpolationFunction(c.speedCorrection, a, c.inertionDecay)), (c.speed += c.speedCorrection);
                            } else c.speedCorrection = 0;
                        }),
                        (this.applyTransition = function (a) {
                            var b = a.to,
                                d = c;
                            c.isAnimationLocked ||
                                (c.tween && c.tween.kill(),
                                (c.isAnimationActive = !0),
                                (c.isAnimationLocked = !0),
                                (c.speed = 0),
                                (c.speedCorrection = 0),
                                (c.tween = (0, j.Vj)(
                                    { from: c.localCarouselPosition, to: b, duration: 0.6, delay: 0, ease: o.pZ.easePower2 },
                                    function (a) {
                                        a.progress > 0.5 && d.isAnimationLocked && (d.isAnimationLocked = !1), (d.localCarouselPosition = a.value), (d.delta = a.delta), d.callback({ delta: a.delta, position: a.value });
                                    },
                                    function () {
                                        d.isAnimationActive = !1;
                                    }
                                )));
                        }),
                        (this.applyDrag = function (a) {
                            var b = a.isDragActive,
                                d = a.dragPosition;
                            b ? ((c.isDragActive = !0), (c.dragPosition = d)) : ((c.previousDragPosition = void 0), (c.isDragActive = !1));
                        }),
                        (this.interpolationFunction = a.inertionInterpolationFunction),
                        (this.inertionDecay = a.inertionDecay),
                        (this.mode = a.mode),
                        (this.correction = a.inertionCorrection),
                        (this.sizes = { itemWidth: a.itemWidth, gapWidth: a.gapWidth, totalWidth: a.totalWidth, containerWidth: a.containerWidth }),
                        (this.callback = a.motionCallback),
                        (this.localCarouselPosition = a.position),
                        (this.loopFunction = (0, j.ip)(this.loop)),
                        this.loopFunction.start();
                },
                q = function (a) {
                    return void 0 !== a.touches;
                },
                r = function b(a) {
                    "use strict";
                    var c = a.outerWrapper,
                        d = a.callback,
                        e = this;
                    !(function (a, b) {
                        if (!(a instanceof b)) throw new TypeError("Cannot call a class as a function");
                    })(this, b),
                        (this.dragging = !1),
                        (this.touch = !1),
                        (this.startPointerPosition = { x: 0, y: 0 }),
                        (this.destroy = function () {
                            e.outerWrapper.removeEventListener("mousedown", e.handlePointerStart),
                                e.outerWrapper.removeEventListener("mousemove", e.handlePointerMove),
                                e.outerWrapper.removeEventListener("mouseup", e.handlePointerEnd),
                                e.outerWrapper.removeEventListener("mouseleave", e.handlePointerEnd),
                                e.outerWrapper.removeEventListener("touchstart", e.handlePointerStart),
                                e.outerWrapper.removeEventListener("touchmove", e.handlePointerMove),
                                e.outerWrapper.removeEventListener("touchend", e.handlePointerEnd);
                        }),
                        (this.handlePointerStart = function (a) {
                            var b, c;
                            if (((e.dragging = !0), q(a))) {
                                if (1 !== a.touches.length) return !1;
                                (b = a.touches[0].clientX), (c = a.touches[0].clientY), (e.touch = !0);
                            } else (b = a.clientX), (c = a.clientY), (e.touch = !1);
                            (e.vertical = void 0), (e.startPointerPosition = { x: b, y: c }), e.callback({ pointerX: b, dragging: e.dragging });
                        }),
                        (this.handlePointerMove = function (a) {
                            if (!e.dragging) return !1;
                            if (q(a)) {
                                if (1 !== a.touches.length) return !1;
                                (c = a.touches[0].clientX), (d = a.touches[0].clientY), (e.touch = !0);
                            } else (c = a.clientX), (d = a.clientY), (e.touch = !1);
                            var c,
                                d,
                                b = { x: e.startPointerPosition.x - c, y: e.startPointerPosition.y - d };
                            if ((void 0 === e.vertical && 0 !== b.x && 0 !== b.y && (e.vertical = Math.abs(b.x) < Math.abs(b.y)), e.vertical)) return e.callback({ dragging: e.dragging, touchAction: "pan-y" }), !1;
                            e.touch && (a.preventDefault(), a.stopPropagation()), e.callback({ pointerX: c, dragging: e.dragging, touchAction: "none" });
                        }),
                        (this.handlePointerEnd = function () {
                            (e.dragging = !1), (e.startPointerPosition = { x: 0, y: 0 }), e.callback({ dragging: e.dragging, touchAction: "pan-y" });
                        }),
                        (this.outerWrapper = c),
                        (this.callback = d),
                        this.outerWrapper.addEventListener("mousedown", this.handlePointerStart, { passive: !1 }),
                        this.outerWrapper.addEventListener("mousemove", this.handlePointerMove, { passive: !1 }),
                        this.outerWrapper.addEventListener("mouseup", this.handlePointerEnd, { passive: !1 }),
                        this.outerWrapper.addEventListener("mouseleave", this.handlePointerEnd, { passive: !1 }),
                        this.outerWrapper.addEventListener("touchstart", this.handlePointerStart, { passive: !1 }),
                        this.outerWrapper.addEventListener("touchmove", this.handlePointerMove, { passive: !1 }),
                        this.outerWrapper.addEventListener("touchend", this.handlePointerEnd, { passive: !1 });
                },
                d = a(4817),
                s = function b(a) {
                    "use strict";
                    var c = a.id,
                        d = a.container,
                        e = a.ariaLabel,
                        f = this;
                    !(function (a, b) {
                        if (!(a instanceof b)) throw new TypeError("Cannot call a class as a function");
                    })(this, b),
                        (this.isFocusOn = !1),
                        (this.destroy = function () {
                            f.container.removeAttribute("tabindex"),
                                f.container.removeAttribute("aria-label"),
                                f.container.removeEventListener("focus", f.handleFocus),
                                f.container.removeEventListener("blur", f.handleBlur),
                                document.removeEventListener("keydown", f.handleKeyboard);
                        }),
                        (this.handleFocus = function () {
                            f.isFocusOn = !0;
                        }),
                        (this.handleBlur = function () {
                            f.isFocusOn = !1;
                        }),
                        (this.handleKeyboard = function (a) {
                            f.isFocusOn &&
                                ("ArrowLeft" === a.key
                                    ? y.dispatch({ type: "carousel:byIndex", payload: { id: f.id, scrollValue: -1 } })
                                    : "ArrowRight" === a.key && y.dispatch({ type: "carousel:byIndex", payload: { id: f.id, scrollValue: 1 } }));
                        }),
                        (this.id = c),
                        (this.container = d),
                        this.container.setAttribute("tabindex", "0"),
                        this.container.setAttribute("aria-label", e),
                        this.container.addEventListener("focus", this.handleFocus),
                        this.container.addEventListener("blur", this.handleBlur),
                        document.addEventListener("keydown", this.handleKeyboard);
                },
                t = function b(a) {
                    "use strict";
                    var c = a.container,
                        d = a.id,
                        e = a.childrenRefs,
                        f = a.applySectionScrollFix,
                        g = this;
                    !(function (a, b) {
                        if (!(a instanceof b)) throw new TypeError("Cannot call a class as a function");
                    })(this, b),
                        (this.destroy = function () {
                            document.removeEventListener("keydown", g.handleKeyboard);
                        }),
                        (this.handleKeyboard = function (a) {
                            if ("Tab" === a.key) {
                                var b = g;
                                setTimeout(function () {
                                    var c = b,
                                        a = document.activeElement;
                                    a &&
                                        b.container.contains(a) &&
                                        b.childrenRefs.forEach(function (d, e) {
                                            if (d.current && d.current.contains(a)) {
                                                var f = c;
                                                if (
                                                    (y.dispatch({ type: "carousel:toIndex", payload: { id: c.id, scrollValue: e } }),
                                                    c.container.scrollTo(0, 0),
                                                    requestAnimationFrame(function () {
                                                        f.container.scrollTo(0, 0);
                                                    }),
                                                    c.applySectionScrollFix)
                                                ) {
                                                    var b = c.container.closest("section");
                                                    b &&
                                                        (b.scrollTo(0, b.scrollTop),
                                                        requestAnimationFrame(function () {
                                                            b.scrollTo(0, b.scrollTop);
                                                        }));
                                                }
                                            }
                                        });
                                }, 0);
                            }
                        }),
                        (this.container = c),
                        (this.id = d),
                        (this.childrenRefs = e),
                        (this.applySectionScrollFix = f),
                        document.addEventListener("keydown", this.handleKeyboard);
                },
                e = a(8261),
                u = function () {};
            e.l;
            var v = a(340);
            function w(a, b, c) {
                return b in a ? Object.defineProperty(a, b, { value: c, enumerable: !0, configurable: !0, writable: !0 }) : (a[b] = c), a;
            }
            function x(d) {
                for (var a = 1; a < arguments.length; a++) {
                    var c = null != arguments[a] ? arguments[a] : {},
                        b = Object.keys(c);
                    "function" == typeof Object.getOwnPropertySymbols &&
                        (b = b.concat(
                            Object.getOwnPropertySymbols(c).filter(function (a) {
                                return Object.getOwnPropertyDescriptor(c, a).enumerable;
                            })
                        )),
                        b.forEach(function (a) {
                            w(d, a, c[a]);
                        });
                }
                return d;
            }
            var y = new d.v(),
                z = b.useLayoutEffect,
                A = function (a) {
                    var f = a.id,
                        k = a.mode,
                        e = void 0 === k ? "simple" : k,
                        o = a.inertionCorrection,
                        $ = void 0 !== o && o,
                        q = a.align,
                        w = void 0 === q ? "left" : q,
                        A = a.interactive,
                        i = void 0 === A ? "always" : A,
                        B = a.gap,
                        _ = void 0 === B ? 30 : B,
                        C = a.padding,
                        aa = void 0 === C ? 0 : C,
                        D = a.paddingUnits,
                        ab = void 0 === D ? "px" : D,
                        E = a.itemWidth,
                        ac = void 0 === E ? 300 : E,
                        F = a.maximumItemWidth,
                        ad = void 0 === F ? 350 : F,
                        G = a.resizeElements,
                        ae = void 0 === G || G,
                        H = a.elementsPerScreen,
                        I =
                            void 0 === H
                                ? [
                                      { breakpoint: 320, number: 1 },
                                      { breakpoint: 640, number: 2 },
                                      { breakpoint: 1024, number: 3 },
                                  ]
                                : H,
                        J = a.inertionDecay,
                        af = void 0 === J ? 16 : J,
                        K = a.inertionInterpolationFunction,
                        L = a.applySectionScrollFix,
                        ag = void 0 === L || L,
                        M = a.triggered,
                        N = void 0 !== M && M,
                        O = a.childrenAnimationFunction,
                        ah = void 0 === O ? u : O,
                        P = a.triggerFunction,
                        ai = void 0 === P ? v.xd : P,
                        Q = a.ariaLabel,
                        aj = void 0 === Q ? "Carousel. Use arrow keys to change slides." : Q,
                        ak = a.className,
                        al = a.style,
                        R = a.children,
                        S = (0, b.useRef)(null),
                        T = (0, b.useRef)(null),
                        U = (0, b.useState)([]),
                        am = U[0],
                        as = U[1],
                        at = (0, b.useRef)({ motion: { x: 0, delta: 0 } }),
                        j = (0, b.useRef)([]);
                    (j.current.length === I.length &&
                        j.current.reduce(function (c, a, b) {
                            return c && a.breakpoint === I[b].breakpoint && a.number === I[b].number;
                        }, !0)) ||
                        (j.current = I);
                    var V = R.length,
                        c = (0, b.useRef)({ containerWidth: 0, itemWidth: 0, gapWidth: 0, totalWidth: 0, leftShift: 0, numberOfFakeElements: 0 }),
                        au = (0, b.useRef)([]),
                        av = (0, b.useRef)([]),
                        aw = (0, b.useRef)({ actual: 0, unshifted: 0, unnormalized: 0 }),
                        ax = (0, b.useRef)(N),
                        ay = (0, b.useRef)(!1),
                        W = (0, b.useState)(c.current),
                        d = W[0],
                        az = W[1],
                        X = (0, b.useState)(al || {}),
                        an = X[0],
                        aA = X[1],
                        aB = (0, b.useRef)(),
                        aC = (0, b.useRef)(),
                        aD = (0, b.useRef)(),
                        aE = (0, b.useRef)(),
                        aF = (0, b.useRef)(),
                        aG = (0, b.useRef)(
                            void 0 === K
                                ? function (a, b, c) {
                                      return a + (b - a) / c;
                                  }
                                : K
                        ),
                        Y = (0, b.useCallback)(
                            function (f) {
                                if (S.current) {
                                    var a = 0,
                                        b = 0;
                                    for (var d in at.current) (a += at.current[d].x), (b += at.current[d].delta);
                                    var g = a;
                                    if (((aw.current.unnormalized = a), "continuous" === e && c.current.totalWidth > 0)) {
                                        for (; a < -c.current.totalWidth; ) a += c.current.totalWidth;
                                        for (; a > 0; ) a -= c.current.totalWidth;
                                    }
                                    var h = a;
                                    (aw.current.unshifted = a),
                                        (a += c.current.leftShift),
                                        "center" === w && (a += c.current.containerWidth / 2 - c.current.itemWidth / 2),
                                        (f || Math.abs(a - aw.current.actual) > 0.05) &&
                                            (ah({
                                                carouselPosition: h,
                                                unnormalizedCarouselPosition: g,
                                                containerWidth: c.current.containerWidth,
                                                elements: av.current.map(function (a, b) {
                                                    return {
                                                        ref: a.ref,
                                                        fake: a.fake,
                                                        index: a.index,
                                                        compositeAnimationRef: a.compositeAnimationRef,
                                                        position: (b - c.current.numberOfFakeElements) * (c.current.itemWidth + c.current.gapWidth),
                                                    };
                                                }),
                                                itemWidth: c.current.itemWidth,
                                                gapWidth: c.current.gapWidth,
                                                speed: b,
                                                align: w,
                                                totalWidth: c.current.totalWidth,
                                            }),
                                            (aw.current.actual = a),
                                            (S.current.style.transform = "translateX(".concat(a, "px) translateZ(0px)")));
                                }
                            },
                            [e, w, ah]
                        ),
                        Z = (0, b.useCallback)(
                            function () {
                                if (aB.current) {
                                    var a = aB.current.resize();
                                    a &&
                                        ((c.current = { containerWidth: a.containerWidth, gapWidth: a.gapWidth, itemWidth: a.itemWidth, totalWidth: a.totalWidth, leftShift: a.leftShift, numberOfFakeElements: a.numberOfFakeElements }),
                                        az(c.current),
                                        Y());
                                }
                            },
                            [Y]
                        ),
                        ao = (0, b.useCallback)(
                            function (a) {
                                (Math.abs(at.current.motion.x - a.position) > 0.05 || Math.abs(at.current.motion.delta - a.delta)) && ((at.current.motion.x = a.position), (at.current.motion.delta = a.delta), Y());
                            },
                            [Y]
                        ),
                        ap = (0, b.useCallback)(function (a) {
                            var b = a.dragging,
                                c = a.pointerX,
                                d = a.touchAction;
                            aC.current &&
                                (b
                                    ? aA(function (a) {
                                          return "grabbing" === a.cursor && a.touchAction === d ? a : x({}, a, { cursor: "grabbing", touchAction: d || a.touchAction });
                                      })
                                    : aA(function (a) {
                                          return "grab" === a.cursor && a.touchAction === d ? a : x({}, a, { cursor: "grab", touchAction: d || a.touchAction });
                                      }),
                                aD.current && aD.current.applyDrag({ isDragActive: b, dragPosition: c || 0 }));
                        }, []),
                        aq = (0, b.useCallback)(
                            function (a) {
                                if (a && a.payload.id === f && aD.current) {
                                    var b =
                                        "carousel:to" === a.type
                                            ? -a.payload.scrollValue
                                            : "carousel:toIndex" === a.type
                                            ? -a.payload.scrollValue * (c.current.itemWidth + c.current.gapWidth)
                                            : "carousel:toPercent" === a.type
                                            ? -a.payload.scrollValue * (c.current.totalWidth - c.current.containerWidth)
                                            : "carousel:toVw" === a.type
                                            ? -a.payload.scrollValue * h.Uh.get().width
                                            : "carousel:by" === a.type
                                            ? aw.current.unnormalized - a.payload.scrollValue
                                            : "carousel:byIndex" === a.type
                                            ? aw.current.unnormalized - a.payload.scrollValue * (c.current.itemWidth + c.current.gapWidth)
                                            : "carousel:byPercent" === a.type
                                            ? aw.current.unnormalized - (a.payload.scrollValue / 100) * c.current.containerWidth
                                            : "carousel:byVw" === a.type
                                            ? aw.current.unnormalized - a.payload.scrollValue * h.Uh.get().width
                                            : 0;
                                    "simple" === e && (b = Math.min(0, Math.max(-(c.current.totalWidth - c.current.containerWidth), b))), 0.1 > Math.abs(b - aw.current.unnormalized) || aD.current.applyTransition({ to: b });
                                }
                            },
                            [f, e]
                        );
                    (0, b.useEffect)(
                        function () {
                            return (
                                y.subscribe(aq),
                                h.Uh.subscribe(Z),
                                function () {
                                    y.unsubscribe(aq), h.Uh.unsubscribe(Z);
                                }
                            );
                        },
                        [aq, Z]
                    ),
                        z(
                            function () {
                                if (S.current && T.current) {
                                    var a = { mode: e, resizeElements: ae, elementsPerScreen: j.current, gap: _, itemWidth: ac, padding: aa, paddingUnits: ab, maximumItemWidth: ad, total: V, container: S.current, outerWrapper: T.current };
                                    "continuous" === e ? (aB.current = new m(a)) : "simple" === e && (aB.current = new n(a)), Z();
                                }
                                return function () {
                                    aB.current && (aB.current.destroy(), (aB.current = void 0));
                                };
                            },
                            [e, ae, _, ac, aa, ab, ad, V, S.current, T.current, Z]
                        ),
                        z(
                            function () {
                                return (
                                    "always" === i &&
                                        T.current &&
                                        ((aC.current = new r({ outerWrapper: T.current, callback: ap })),
                                        aA(function (a) {
                                            return x({}, a, { cursor: "grab", userSelect: "none", MozUserSelect: "none", WebkitTouchCallout: "none", touchAction: "pan-y" });
                                        })),
                                    function () {
                                        aC.current &&
                                            (aC.current.destroy(),
                                            (aC.current = void 0),
                                            aA(function (a) {
                                                return x({}, a, { cursor: "auto", userSelect: "auto", MozUserSelect: "auto", WebkitTouchCallout: "default", touchAction: "auto" });
                                            }));
                                    }
                                );
                            },
                            [i, ap]
                        ),
                        z(
                            function () {
                                return (
                                    "always" === i && T.current && (aE.current = new s({ id: f, container: T.current, ariaLabel: aj })),
                                    function () {
                                        aE.current && (aE.current.destroy(), (aE.current = void 0));
                                    }
                                );
                            },
                            [f, i, aj]
                        ),
                        (0, b.useEffect)(
                            function () {
                                return (
                                    (aD.current = new p({
                                        position: at.current.motion.x,
                                        mode: e,
                                        itemWidth: c.current.itemWidth,
                                        gapWidth: c.current.gapWidth,
                                        totalWidth: c.current.totalWidth,
                                        containerWidth: c.current.containerWidth,
                                        inertionCorrection: $,
                                        inertionDecay: af,
                                        inertionInterpolationFunction: aG.current,
                                        motionCallback: ao,
                                    })),
                                    function () {
                                        aD.current && aD.current.destroy();
                                    }
                                );
                            },
                            [e, c.current.itemWidth, c.current.gapWidth, c.current.totalWidth, c.current.containerWidth, $, af, ao]
                        ),
                        (0, b.useEffect)(
                            function () {
                                (au.current = []), (av.current = []);
                                for (
                                    var a = R.map(function (a, f) {
                                            var c = b.createRef(),
                                                e = b.createRef();
                                            au.current.push(c), av.current.push({ index: f, ref: c, fake: !1, compositeAnimationRef: e });
                                            var h = x({}, a.props.style, { width: d.itemWidth, marginRight: d.gapWidth, flexShrink: 0, flexGrow: 0 });
                                            return (0, g.jsx)(l, { carouselItemRef: c, fake: !1, compositeAnimationRef: e, className: a.props.className, style: h, children: a.props.children }, a.key);
                                        }),
                                        h = [],
                                        j = [],
                                        e = 0;
                                    e < d.numberOfFakeElements;
                                    e++
                                ) {
                                    var c = e % V,
                                        k = b.createRef(),
                                        m = b.createRef();
                                    h.unshift(
                                        (0, g.jsx)(
                                            l,
                                            { carouselItemRef: k, fake: !0, compositeAnimationRef: m, className: a[V - c - 1].props.className, style: a[V - c - 1].props.style, children: a[V - c - 1].props.children },
                                            "fake-1-".concat(a[V - c - 1].key, "-").concat(Math.floor(e / V))
                                        )
                                    ),
                                        av.current.unshift({ index: V - c - 1, ref: k, fake: !0, compositeAnimationRef: m });
                                    var n = b.createRef(),
                                        o = b.createRef();
                                    j.push(
                                        (0, g.jsx)(
                                            l,
                                            { carouselItemRef: n, fake: !0, compositeAnimationRef: o, className: a[c].props.className, style: a[c].props.style, children: a[c].props.children },
                                            "fake-0-".concat(a[c].key, "-").concat(Math.floor(e / V))
                                        )
                                    ),
                                        av.current.push({ index: c, ref: n, fake: !0, compositeAnimationRef: o });
                                }
                                return (
                                    Array.prototype.unshift.apply(a, h),
                                    as((a = a.concat(j))),
                                    "always" === i && T.current && (aF.current = new t({ id: f, container: T.current, childrenRefs: au.current, applySectionScrollFix: ag })),
                                    function () {
                                        aF.current && (aF.current.destroy(), (aF.current = void 0));
                                    }
                                );
                            },
                            [R, d.numberOfFakeElements, d.itemWidth, d.gapWidth, ag, f, i, V]
                        ),
                        z(function () {
                            Y(!0);
                        }),
                        (0, b.useEffect)(function () {
                            !ay.current &&
                                av.current.length &&
                                av.current.reduce(function (b, a) {
                                    return b && null !== a.ref.current && null !== a.compositeAnimationRef.current;
                                }, !0) &&
                                ((ay.current = !0),
                                ai({
                                    align: w,
                                    carouselPosition: aw.current.unshifted,
                                    containerWidth: c.current.containerWidth,
                                    elements: av.current.map(function (a, b) {
                                        return { ref: a.ref, fake: a.fake, index: a.index, compositeAnimationRef: a.compositeAnimationRef, position: (b - c.current.numberOfFakeElements) * (c.current.itemWidth + c.current.gapWidth) };
                                    }),
                                    gapWidth: c.current.gapWidth,
                                    itemWidth: c.current.itemWidth,
                                    totalWidth: c.current.totalWidth,
                                    triggered: ax.current,
                                    immidiate: !0,
                                }));
                        }),
                        (0, b.useEffect)(
                            function () {
                                N !== ax.current &&
                                    ((ax.current = N),
                                    ai({
                                        align: w,
                                        carouselPosition: aw.current.unshifted,
                                        containerWidth: c.current.containerWidth,
                                        elements: av.current.map(function (a, b) {
                                            return { ref: a.ref, fake: a.fake, index: a.index, compositeAnimationRef: a.compositeAnimationRef, position: (b - c.current.numberOfFakeElements) * (c.current.itemWidth + c.current.gapWidth) };
                                        }),
                                        gapWidth: c.current.gapWidth,
                                        itemWidth: c.current.itemWidth,
                                        totalWidth: c.current.totalWidth,
                                        triggered: N,
                                        immidiate: !1,
                                    }));
                            },
                            [N, w, ai]
                        );
                    var ar = { display: "flex", flexWrap: "nowrap", width: d.totalWidth ? d.totalWidth : "100%" };
                    return (0, g.jsx)("div", { ref: T, className: ak, style: an, children: (0, g.jsx)("div", { ref: S, style: ar, children: am }) });
                };
        },
        5846: function (c, b, a) {
            "use strict";
            a.d(b, {
                l: function () {
                    return d.lr;
                },
                X: function () {
                    return g;
                },
            });
            var d = a(7066),
                e = a(5893),
                f = a(7294),
                g = function (a) {
                    var g = a.id,
                        b = a.mode,
                        h = void 0 === b ? "by" : b,
                        i = a.scrollValue,
                        c = a.scrollUnits,
                        j = void 0 === c ? "index" : c,
                        k = a.children,
                        l = a.className,
                        m = a.style,
                        n = a.ariaLabel,
                        o = (0, f.useCallback)(
                            function () {
                                var a =
                                    "by" === h
                                        ? "px" === j
                                            ? "carousel:by"
                                            : "%" === j
                                            ? "carousel:byPercent"
                                            : "vw" === j
                                            ? "carousel:byVw"
                                            : "index" === j
                                            ? "carousel:byIndex"
                                            : void 0
                                        : "to" === h
                                        ? "px" === j
                                            ? "carousel:to"
                                            : "%" === j
                                            ? "carousel:toPercent"
                                            : "vw" === j
                                            ? "carousel:toVw"
                                            : "index" === j
                                            ? "carousel:toIndex"
                                            : void 0
                                        : void 0;
                                a && d.jl.dispatch({ type: a, payload: { id: g, scrollValue: i } });
                            },
                            [g, h, j, i]
                        );
                    return (0, e.jsx)("button", { onClick: o, className: l, style: m, "aria-label": n, children: k });
                };
        },
        5703: function (c, a, b) {
            "use strict";
            function d(c, a) {
                (null == a || a > c.length) && (a = c.length);
                for (var b = 0, d = new Array(a); b < a; b++) d[b] = c[b];
                return d;
            }
            function e(a, b) {
                return (
                    (function (a) {
                        if (Array.isArray(a)) return a;
                    })(a) ||
                    (function (b, e) {
                        var f,
                            g,
                            a = null == b ? null : ("undefined" != typeof Symbol && b[Symbol.iterator]) || b["@@iterator"];
                        if (null != a) {
                            var c = [],
                                d = !0,
                                h = !1;
                            try {
                                for (a = a.call(b); !(d = (f = a.next()).done) && (c.push(f.value), !e || c.length !== e); d = !0);
                            } catch (i) {
                                (h = !0), (g = i);
                            } finally {
                                try {
                                    d || null == a.return || a.return();
                                } finally {
                                    if (h) throw g;
                                }
                            }
                            return c;
                        }
                    })(a, b) ||
                    f(a, b) ||
                    (function () {
                        throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
                    })()
                );
            }
            function f(a, c) {
                if (a) {
                    if ("string" == typeof a) return d(a, c);
                    var b = Object.prototype.toString.call(a).slice(8, -1);
                    if (("Object" === b && a.constructor && (b = a.constructor.name), "Map" === b || "Set" === b)) return Array.from(b);
                    if ("Arguments" === b || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(b)) return d(a, c);
                }
            }
            b.d(a, {
                z: function () {
                    return h;
                },
            });
            var g = function (a) {
                    return a.toLowerCase().replace(/([-_][a-z])/g, function (a) {
                        return a.toUpperCase().replace("-", "").replace("_", "");
                    });
                },
                h = function (j) {
                    var c = {},
                        a = !0,
                        d = !1,
                        f = void 0;
                    try {
                        for (var h, b = Object.entries(j)[Symbol.iterator](); !(a = (h = b.next()).done); a = !0) {
                            var i = e(h.value, 2),
                                k = i[0],
                                l = i[1];
                            c[g(k)] = l;
                        }
                    } catch (m) {
                        (d = !0), (f = m);
                    } finally {
                        try {
                            a || null == b.return || b.return();
                        } finally {
                            if (d) throw f;
                        }
                    }
                    return c;
                };
        },
        2186: function (a) {
            a.exports = { VisuallyHidden: "Helpers_VisuallyHidden__Ad50c" };
        },
        2545: function (a) {
            a.exports = {
                Trigger_ImgLeft: "Trigger_Trigger_ImgLeft__yam6K",
                Image: "Trigger_Image__0Myni",
                Trigger_ImgRight: "Trigger_Trigger_ImgRight___xMqw",
                Triggered: "Trigger_Triggered__SZgqg",
                Trigger_Right: "Trigger_Trigger_Right__dWZBT",
                Trigger_Left: "Trigger_Trigger_Left__SjH17",
                Trigger_Top: "Trigger_Trigger_Top__8WLll",
                Trigger_TopLow: "Trigger_Trigger_TopLow__7ycMd",
                Triggered_Transparent: "Trigger_Triggered_Transparent__Nd0vK",
                Container: "Trigger_Container__yO5a7",
            };
        },
        1106: function (a) {
            a.exports = {
                Section: "Awards_Section__jTIyt",
                Title: "Awards_Title__bQ1Qb",
                Subtitle: "Awards_Subtitle__A8um6",
                List: "Awards_List__vW0Wc",
                Triggered: "Awards_Triggered__6f37j",
                Item: "Awards_Item__J3hSn",
                Item_hidden: "Awards_Item_hidden__gDHuU",
                Ico: "Awards_Ico__4mSVn",
                Logo: "Awards_Logo__q1ROP",
                Text: "Awards_Text__YjKMp",
                Item__Title: "Awards_Item__Title__UGTsm",
                Item__Subtitle: "Awards_Item__Subtitle___Wywy",
                Year: "Awards_Year__avzPg",
                ShowMore: "Awards_ShowMore__ykvOx",
                Trigger: "Awards_Trigger__RaKx8",
                Triggered_Subtitle: "Awards_Triggered_Subtitle__gmr_5",
            };
        },
        4072: function (a) {
            a.exports = {
                BigCard: "BigCard_BigCard__BQMxi",
                BottomBlock: "BigCard_BottomBlock__GlMeP",
                BottomBlock_Triggered: "BigCard_BottomBlock_Triggered__IiSpK",
                BottomBlock__Left: "BigCard_BottomBlock__Left__lE_7y",
                Text: "BigCard_Text__VSQsR",
                Title: "BigCard_Title__jE7e1",
                BottomBlock__Right: "BigCard_BottomBlock__Right__HIwyG",
                BottomBlock__Description: "BigCard_BottomBlock__Description__yzOGO",
                ImageWrap: "BigCard_ImageWrap__rMoLZ",
                Image: "BigCard_Image__O3Xts",
                ImageWrap_Triggered: "BigCard_ImageWrap_Triggered__ItZ5T",
            };
        },
        3936: function (a) {
            a.exports = {
                Hero: "hero_Hero__DH4Eu",
                Container: "hero_Container__RS6ux",
                Column: "hero_Column__gx_np",
                Column_wide: "hero_Column_wide__L_cz6",
                Hero_blue: "hero_Hero_blue__1g59o",
                Hero_darkBlue: "hero_Hero_darkBlue__Wgbxg",
                ImageInner: "hero_ImageInner__dZtgn",
                OuterImage: "hero_OuterImage__nR3_0",
                OuterImage_Right: "hero_OuterImage_Right__KkpOD",
                OuterImage_Left: "hero_OuterImage_Left__g_Qnv",
                OuterImage_loaded: "hero_OuterImage_loaded__YXjgH",
                OuterImage__inner: "hero_OuterImage__inner__A63qX",
            };
        },
        101: function (a) {
            a.exports = { Section: "Section_Section__n6Bub" };
        },
        8055: function (a) {
            a.exports = { Wrapper: "NewsCaption_Wrapper__DD7k3", BusinessUnit: "NewsCaption_BusinessUnit__mWYMV", Date: "NewsCaption_Date__jhvEh" };
        },
        6367: function (a) {
            a.exports = {
                Link: "Card_Link__bAtvv",
                Link_Light: "Card_Link_Light__k8Ue0",
                Inner: "Card_Inner__Kdc3S",
                Image: "Card_Image__NngZW",
                Image__Fallback: "Card_Image__Fallback__VacgE",
                Image__InnerFallback: "Card_Image__InnerFallback__x_Pdh",
                Image__Inner: "Card_Image__Inner__LU6YC",
                Title: "Card_Title__DLqzU",
                BusinessUnit: "Card_BusinessUnit__6mT3H",
                Caption: "Card_Caption__Vi005",
                Caption_Small: "Card_Caption_Small__OezyD",
                Date: "Card_Date__Z_kv8",
            };
        },
        2197: function (a) {
            a.exports = {
                Wrapper: "Heading_Wrapper__XG6pQ",
                Image: "Heading_Image____lsP",
                Text: "Heading_Text__FYRsU",
                Title: "Heading_Title__Ly4BE",
                Title__Link: "Heading_Title__Link__9uc7L",
                Description: "Heading_Description__gkvA0",
                BusinessUnit: "Heading_BusinessUnit__uhMQq",
                Date: "Heading_Date__hsQCT",
                Image__Inner: "Heading_Image__Inner__prS40",
                Title_Triggered: "Heading_Title_Triggered__WdTmU",
                BusinessUnit_Triggered: "Heading_BusinessUnit_Triggered__rmHtl",
                Description_Triggered: "Heading_Description_Triggered__674ln",
                Date_Triggered: "Heading_Date_Triggered__vMiSr",
                Image_Triggered: "Heading_Image_Triggered__ASfhL",
            };
        },
        6724: function (a) {
            a.exports = {
                Header: "Previews_Header__QjoHG",
                Title: "Previews_Title__8DRhL",
                Items: "Previews_Items__roSi1",
                Swiper: "Previews_Swiper__Tba6M",
                Button: "Previews_Button__f7eFB",
                SliderControls: "Previews_SliderControls__eDp0t",
                SliderControl: "Previews_SliderControl__mEVcp",
                SliderControl__Icon: "Previews_SliderControl__Icon__6yQN7",
                SliderControl_Right: "Previews_SliderControl_Right__Og9vF",
                SliderControl_Left: "Previews_SliderControl_Left__kUBFB",
            };
        },
        5092: function (a) {
            a.exports = { Link: "Link_Link__uyEh5", Link_Simple: "Link_Link_Simple__noE0f", Link_Underlined: "Link_Link_Underlined__eRNg2" };
        },
        5276: function (a) {
            a.exports = { number: "Number_number__VdXC0", value: "Number_value__vzGVm", caption: "Number_caption__ngbQ5" };
        },
        8834: function (a) {
            a.exports = { Section: "AwardsSection_Section__gmHFX" };
        },
        8357: function (a) {
            a.exports = {
                Container: "BusinessesSection_Container__gz9Ox",
                Title: "BusinessesSection_Title__yMuwj",
                Text: "BusinessesSection_Text__rXMN5",
                Title__UnderlineText: "BusinessesSection_Title__UnderlineText__bnSWC",
                Subtitle: "BusinessesSection_Subtitle__Sm25v",
                Subtitle_Triggered: "BusinessesSection_Subtitle_Triggered__y_TVi",
                Buttons: "BusinessesSection_Buttons__bpZV_",
                Buttons__First: "BusinessesSection_Buttons__First__UlRLL",
                Buttons__First_Triggered: "BusinessesSection_Buttons__First_Triggered__Hhce8",
                Buttons__Second: "BusinessesSection_Buttons__Second__VHpwV",
                Buttons__Second_Triggered: "BusinessesSection_Buttons__Second_Triggered__gKlTP",
                BusinessUnits: "BusinessesSection_BusinessUnits__9UOv0",
                BusinessUnits_Triggered: "BusinessesSection_BusinessUnits_Triggered__4vwVN",
                Card: "BusinessesSection_Card__ra9I2",
                Card__Overflow: "BusinessesSection_Card__Overflow__NK88J",
                Card__ImgContainer: "BusinessesSection_Card__ImgContainer__rShFE",
                Card__LogoWrap: "BusinessesSection_Card__LogoWrap__UYrYB",
                Card__Logo: "BusinessesSection_Card__Logo__NZMgi",
                Card__Text: "BusinessesSection_Card__Text__O3G2N",
                Card__TextTitle: "BusinessesSection_Card__TextTitle__6ryvn",
                Card__TextDescription: "BusinessesSection_Card__TextDescription__nkHmg",
                Card__TextUnderline: "BusinessesSection_Card__TextUnderline__MGH_v",
                Section: "BusinessesSection_Section__L09Er",
            };
        },
        8311: function (a) {
            a.exports = {
                Section: "CareerSection_Section__prtJo",
                Overflow: "CareerSection_Overflow__2BmkY",
                Title: "CareerSection_Title__O4Akv",
                Title__underlineText: "CareerSection_Title__underlineText__W6Ynk",
                TitleСareer: "CareerSection_Title_areer__d2kvN",
            };
        },
        8675: function (a) {
            a.exports = {
                Hero: "HeroSection_Hero__W_57x",
                Text: "HeroSection_Text__TUi8n",
                Additional: "HeroSection_Additional__H0tL4",
                Controls: "HeroSection_Controls__y4ywX",
                Controls__Button: "HeroSection_Controls__Button__CAmcL",
                Controls__Button_disabled: "HeroSection_Controls__Button_disabled__WS6mO",
                Controls__Icon: "HeroSection_Controls__Icon__dcfBF",
                SliderData: "HeroSection_SliderData__fOhSy",
                SliderData__counter: "HeroSection_SliderData__counter__O4QLP",
                SliderData__name: "HeroSection_SliderData__name__uijbz",
                Slider: "HeroSection_Slider__lEyZI",
                Slider__text: "HeroSection_Slider__text__KGgf9",
                Slide__text: "HeroSection_Slide__text__AiekU",
                Slide: "HeroSection_Slide__AaojJ",
                Title: "HeroSection_Title__jaEmG",
                Subtitle: "HeroSection_Subtitle__e1_Uv",
                Text__button: "HeroSection_Text__button__A40sp",
                Hero__Loaded: "HeroSection_Hero__Loaded__3KAny",
            };
        },
        2897: function (a) {
            a.exports = {
                OurBrands: "OurBrandsSection_OurBrands__RBYU_",
                OurBrands__title: "OurBrandsSection_OurBrands__title__Y7PHf",
                OurBrands__item: "OurBrandsSection_OurBrands__item__WMbw_",
                OurBrands__image: "OurBrandsSection_OurBrands__image__nOKGR",
                OurBrandsBottom: "OurBrandsSection_OurBrandsBottom__l1txE",
                OurBrandsBottom_triggered: "OurBrandsSection_OurBrandsBottom_triggered__WQIIl",
                Controls: "OurBrandsSection_Controls__xjx8b",
                Controls_Mobile: "OurBrandsSection_Controls_Mobile__BRRph",
                Controls__button: "OurBrandsSection_Controls__button___dNcS",
                Controls__Ico: "OurBrandsSection_Controls__Ico__2OfeP",
                Controls__button_left: "OurBrandsSection_Controls__button_left__0bGSF",
                Controls__button_right: "OurBrandsSection_Controls__button_right__U8dpk",
                OurBrandsBottom__text: "OurBrandsSection_OurBrandsBottom__text__CW39E",
                OurBrandsSlider: "OurBrandsSection_OurBrandsSlider__bVKub",
                BackgroundContainer: "OurBrandsSection_BackgroundContainer__Sdrw_",
                CarouselContainer: "OurBrandsSection_CarouselContainer__1JHAd",
                CarouselWrapper: "OurBrandsSection_CarouselWrapper__dxQ56",
            };
        },
        323: function (a) {
            a.exports = {
                Section: "ReyesCaresSection_Section__PmwrT",
                Overflow: "ReyesCaresSection_Overflow__lM70H",
                Block: "ReyesCaresSection_Block__zOxrG",
                Block_ShiftTop: "ReyesCaresSection_Block_ShiftTop__Fvt24",
                Block__Text: "ReyesCaresSection_Block__Text__SbFtg",
                Block__TextTitle: "ReyesCaresSection_Block__TextTitle__6ge8h",
                Block__TextText: "ReyesCaresSection_Block__TextText__D7Pck",
                Container: "ReyesCaresSection_Container__C_9Dp",
                Block_Left: "ReyesCaresSection_Block_Left__67BTL",
                Column: "ReyesCaresSection_Column__l7K3X",
                CaresLogoWrapper: "ReyesCaresSection_CaresLogoWrapper__2IUEq",
                ImageWrapper: "ReyesCaresSection_ImageWrapper__L04GT",
                Image: "ReyesCaresSection_Image__Nz9oj",
                Triggered: "ReyesCaresSection_Triggered__x_0U9",
                Numbers: "ReyesCaresSection_Numbers__ejuVT",
                Number__Caption: "ReyesCaresSection_Number__Caption__kp3T3",
                LeftTitle: "ReyesCaresSection_LeftTitle__HiPCU",
                Trigger: "ReyesCaresSection_Trigger__M_mh6",
            };
        },
        1419: function (a) {
            a.exports = { Wrapper: "StoriesSection_Wrapper__LoHQp", Button: "StoriesSection_Button__4ZZ2J" };
        },
        3479: function (a) {
            a.exports = {
                section: "VisionSection_section__AkDuP",
                Overflow: "VisionSection_Overflow__G0xJo",
                sectionWrap: "VisionSection_sectionWrap__KHpDr",
                left: "VisionSection_left__vsqpE",
                text: "VisionSection_text__zUxNj",
                imgWrap: "VisionSection_imgWrap__Id1ef",
                imgWrap_triggered: "VisionSection_imgWrap_triggered__hxej3",
                backImage: "VisionSection_backImage__5QxXY",
                columns: "VisionSection_columns__uiLYj",
                columns__item: "VisionSection_columns__item__GGZt9",
                columns__item_triggered: "VisionSection_columns__item_triggered__w6mzo",
                title: "VisionSection_title__E2ul9",
                title_triggered: "VisionSection_title_triggered__rQXBs",
                mainText: "VisionSection_mainText__F8gL2",
                textBlock: "VisionSection_textBlock__ZL1wV",
            };
        },
    },
]);
