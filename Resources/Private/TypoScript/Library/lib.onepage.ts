lib.onepage = COA
lib.onepage {
	10 = COA
	10 {
		10 = COA
		10 < lib.logo

		20 = HMENU
		20 {
			wrap = <nav role="navigation"><h2 class="vh">main navigation</h2>|</nav>

			1 = TMENU
			1 {
				expAll = 1

				NO = 1
				NO {
					wrapItemAndSub = <li>|</li>
					doNotLinkIt = 1

					stdWrap.cObject = CASE
					stdWrap.cObject {
						key.field = doktype
						default = TEXT
						default {
							typolink.parameter = #{field:css_id}
							typolink.parameter.insertData = 1

							field = nav_title
							ifEmpty.field = title
							stdWrap.htmlSpecialChars = 1
							typolink.title.field = title // subtitle
						}
							# External URL
						3 = TEXT
						3 {
							field = nav_title // title
							typolink.parameter.field = url
							typolink.extTarget.field = target
							stdWrap.htmlSpecialChars = 1
						}
					}
				}
				wrap = <ul class="navigation">|</ul>
			}
		}
		wrap = <header id="header" role="banner"><div class="wrapper clearfix">|</div></header>
	}

	20 = CONTENT
	20 {
		table = pages
		select.orderBy = sorting

		renderObj = COA
		renderObj {
			10 = CONTENT
			10 {
				table = tt_content
				select {
					pidInList.field = uid
					orderBy = sorting
				}
				wrap = <section id="{field:css_id}" class="{field:css_class}">|</section>
				wrap.insertData = 1
			}
		}

		wrap = <main role="main">|</main>
	}
}
