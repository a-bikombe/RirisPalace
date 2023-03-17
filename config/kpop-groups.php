<?php

// back-end of kpop.php - allows user to edit biases easily and displays content from members_[group]

$groups = [
	'active' => [
		'name' => 'Actively Stanning',
		'groups' => [
			"txt" => [
				'name' => "TXT",
				'debut' => '2019',
				'groupImage' => 'https://www.pinkvilla.com/files/txt_main_6.png',
				'members' => [
					'HueningKai' => [
						'image' => 'https://image.kpopmap.com/2020/11/20201029r0dKtmix_Xt.jpg',
						'birthday' => '8/14/2002',
						'notes' => [
							'kai',
							''
						]
					],
					'Yeonjun' => [
						'image' => 'https://lh3.googleusercontent.com/WZI1AzYqHWVbaTUR7IzpASrggkQk7uRk6uitrZTxCicfEal14L2x73WgYhLY83-lnZWIg0Opvkvgv2pkPRaiCLLoPTBuD3Aw4dtOU5W9NoGQD612=w960-rj-nu-e365',
						'birthday' => '9/13/1999',
						'notes' => [
							'jjun',
							''
						]
					],
					'Taehyun' => [
						'image' => 'https://static.wikia.nocookie.net/0b7f6e4c-471d-41c1-9f33-c09678ffdbcd',
						'birthday' => '2/5/2002',
						'notes' => [
							'',
							''
						]
					],
					'Beomgyu' => [
						'image' => 'http://pm1.narvii.com/7504/e84530bd61b9ba109d7d2458a9c0b0f532512ce1r1-736-1040v2_uhq.jpg',
						'birthday' => '3/13/2001',
						'notes' => [
							'ggyu',
							''
						]
					],
					'Soobin' => [
						'image' => 'https://assets.teenvogue.com/photos/5f15aa14493c0130c7d9bc85/4:3/w_4000,h_3000,c_limit/tout.jpg',
						'birthday' => '12/5/2000',
						'notes' => [
							'soob',
							''
						]
					]
				],
				'content' => [
					'series' => 'Todo X TXT',
					'short' => '<a href="https://youtube.com/playlist?list=PLcZxoPUYVQX2WESa6ZJ2R9zIGYKO_fPuc" target="_blank">T:Time</a>',
					'long' => 'Episode',
					'vlogs' => '<a href="https://youtube.com/playlist?list=PLcZxoPUYVQX1dffyKtyNYpWWl40COUDz2" target="_blank">Talk X Today</a>',
					'notes' => 'X:Time'
				]
			],
			"nctDream" => [
				'name' => "NCT Dream",
				'debut' => '2016',
				'groupImage' => 'https://www.pinkvilla.com/imageresize/nct_dream_hello_future_concept_teaser_0.jpg?width=752&format=webp&t=pvorg',
				'members' => [
					'Jisung' => [
						'image' => 'https://pbs.twimg.com/media/EtZAacoVEAAAm8H?format=jpg&name=large',
						'birthday' => '2/5/2002',
						'notes' => [
							'Cute',
							'Never knows what to do with his hands'
						]
					],
					'Chenle' => [
						'image' => 'https://kpopping.com/documents/72/4/SHJ_3134_.webp',
						'birthday' => '11/22/2001',
						'notes' => [
							'',
							''
						]
					],
					'Renjun' => [
						'image' => 'https://i.pinimg.com/originals/5e/2a/2a/5e2a2af6c157e6e97305da419f00bd42.jpg',
						'birthday' => '3/23/2000',
						'notes' => [
							'',
							''
						]
					],
					'Jaemin' => [
						'image' => 'https://kpopping.com/documents/cd/1/48959(1).webp',
						'birthday' => '8/13/2000',
						'notes' => [
							'',
							''
						]
					],
					'Jeno' => [
						'image' => 'https://kstationtv.com/wp-content/uploads/2020/04/NCT-DREAM-JENO-2.jpg',
						'birthday' => '4/23/2000',
						'notes' => [
							'',
							''
						]
					],
					'Haechan' => [
						'image' => 'https://qph.fs.quoracdn.net/main-qimg-24d904505e17324975330dd1df531cc2',
						'birthday' => '6/6/2000',
						'notes' => [
							'',
							''
						]
					],
					'Mark' => [
						'image' => 'https://kpopmembersbio.com/wp-content/uploads/2021/04/Mark.jpg',
						'birthday' => '8/2/1999',
						'notes' => [
							'',
							''
						]
					]
				],
				'content' => [
					'series' => '',
					'short' => '',
					'long' => 'Un Cut, [N\']',
					'vlogs' => 'Relay Cam',
					'notes' => ''
				]
			],
			"tbz" => [
				'name' => "The Boyz",
				'debut' => '2017',
				'groupImage' => 'https://www.billboard.com/wp-content/uploads/2020/04/the-boyz-Cr-Crek.ker-Entertainment-billboard-1548-1587069295.jpg',
				'members' => [
					'Kevin' => [
						'image' => 'https://i.pinimg.com/originals/b9/13/20/b913206c2b63d3f5de8d2474cf494c07.jpg',
						'birthday' => '2/23/1998',
						'notes' => [
							'shua',
							''
						]
					],
					'Younghoon' => [
						'image' => 'https://lh3.googleusercontent.com/MRxTqqviJY411TTMEIvWCIobRrvl9viqNq05magmsgU54X2UZmKMwU1OSOzBrafjJDbxiUpasib7awd7HtFWU30EgcpDsgjOuQ=w960-rj-nu-e365',
						'birthday' => '8/8/1997',
						'notes' => [
							'seokjin / mingyu',
							''
						]
					],
					'Eric' => [
						'image' => 'https://www.pinkvilla.com/imageresize/eric_main.jpg?width=752&format=webp&t=pvorg',
						'birthday' => '12/22/2000',
						'notes' => [
							'got7!mark, jaemin',
							''
						]
					],
					'Q' => [
						'image' => 'https://i.pinimg.com/736x/59/93/f9/5993f9545cc5f77abb8d19f280a5feb0.jpg',
						'birthday' => '11/5/1998',
						'notes' => [
							'',
							''
						]
					],
					'Hyunjae' => [
						'image' => 'https://i.pinimg.com/originals/2a/5e/b5/2a5eb5ffb5b07d258ce09d262f940edf.jpg',
						'birthday' => '9/13/1997',
						'notes' => [
							'',
							''
						]
					],
					'New' => [
						'image' => 'https://pbs.twimg.com/media/EKoTDyuU8AExgA7?format=jpg&name=large',
						'birthday' => '4/26/1998',
						'notes' => [
							'skz!felix',
							''
						]
					],
					'Jacob' => [
						'image' => 'https://64.media.tumblr.com/9d66ec13652484c9778cc41ae5786082/c410dd73e66e6f0e-7c/s1280x1920/bf167348354c6d575f37b5d1b8acefa3c62555c6.jpg',
						'birthday' => '5/30/1997',
						'notes' => [
							'',
							''
						]
					],
					'Sunwoo' => [
						'image' => 'https://w0.peakpx.com/wallpaper/605/348/HD-wallpaper-sunwoo-kpop-sunwoo-the-boyz-the-boyz.jpg',
						'birthday' => '4/12/2000',
						'notes' => [
							'cheol',
							''
						]
					],
					'Juhaknyeon' => [
						'image' => 'https://i.pinimg.com/originals/8c/aa/d0/8caad03be5d76774447ad9ce78605007.jpg',
						'birthday' => '3/9/1999',
						'notes' => [
							'haechan / seokjin',
							''
						]
					],
					'Sangyeon' => [
						'image' => 'https://i.pinimg.com/originals/84/0e/39/840e393054405975f7806546e303b500.jpg',
						'birthday' => '11/1996',
						'notes' => [
							'',
							''
						]
					],
					'Juyeon' => [
						'image' => 'https://0.soompi.io/wp-content/uploads/2021/06/22120918/Juyeon-21.jpg',
						'birthday' => '1/15/1998',
						'notes' => [
							'jaehyun / eunwoo / hoseok',
							''
						]
					]
				],
				'content' => [
					'series' => '',
					'short' => '',
					'long' => '<a href="https://youtube.com/playlist?list=PLUBjqMPXJNhYNui0jIPDULul3Sfm5CpUZ" target="_blank">off the boyz</a>',
					'vlogs' => '<a href="https://youtube.com/playlist?list=PLUBjqMPXJNhZhDEOw4oQrLLmYjQDqAvC9" target="_blank">BoyLog</a>',
					'notes' => ''
				]
			],
			"enha" => [
				'name' => "Enhypen",
				'debut' => '2020',
				'groupImage' => 'http://cdn.shopify.com/s/files/1/0548/8141/9401/collections/8aef4a1bfffec83eaffb77a6fc05ee82.jpg?v=1634534673',
				'members' => [
					'Heeseung' => [
						'image' => 'https://i.pinimg.com/564x/9d/4e/a9/9d4ea94701add2af582908c5bb5cc848.jpg',
						'birthday' => '10/15/2001',
						'notes' => [
							'',
							''
						]
					],
					'Sunoo' => [
						'image' => 'https://static.wixstatic.com/media/ab399c_a1a70fc6dab24261908834841485ec6e~mv2.png/v1/fit/w_670%2Ch_980%2Cal_c/file.png',
						'birthday' => '6/24/2003',
						'notes' => [
							'',
							''
						]
					],
					'Jake' => [
						'image' => 'https://cdn.i-scmp.com/sites/default/files/d8/images/canvas/2021/05/27/d44cb6c1-5f71-428a-a9bc-655b57a5add4_289268b4.jpg',
						'birthday' => '11/15/2002',
						'notes' => [
							'',
							''
						]
					],
					'Jungwon' => [
						'image' => 'https://64.media.tumblr.com/5c5c7544f5fff3a77efbd966e0312cd4/406cd28a281e64dd-4c/s1280x1920/92bc43a721a41f89a2245dae43b08cd0e8698f02.jpg',
						'birthday' => '2/8/2004',
						'notes' => [
							'',
							''
						]
					],
					'Niki' => [
						'image' => 'https://pbs.twimg.com/media/EiRjFy8X0AAsLWJ?format=jpg&name=large',
						'birthday' => '12/9/2005',
						'notes' => [
							'',
							''
						]
					],
					'Sunghoon' => [
						'image' => 'https://i.pinimg.com/originals/98/32/b7/9832b70dfafea3abe487d9eced62990c.jpg',
						'birthday' => '12/8/2002',
						'notes' => [
							'',
							''
						]
					],
					'Jay' => [
						'image' => 'https://www.pinkvilla.com/imageresize/jay_enhypen_main_image.jpg?width=752&format=webp&t=pvorg',
						'birthday' => '4/20/2002',
						'notes' => [
							'',
							''
						]
					]
				],
				'content' => [
					'series' => '<a href="https://www.youtube.com/playlist?list=PLMQ4WMltba-EXWrjvNC18Oj4YEGfZKXkO" target="_blank">En-O\'Clock</a>',
					'short' => '<a href="https://youtube.com/playlist?list=PLMQ4WMltba-GtZ_GpsWa3c_wybmZ9-3oq" target="_blank">En-ter Key</a>',
					'long' => 'Episode',
					'vlogs' => '<a href="https://youtube.com/playlist?list=PLMQ4WMltba-F67iE1rTXm58n5mnFWqSir" target="_blank">En:Log</a>',
					'notes' => '<a href="https://youtube.com/playlist?list=PLMQ4WMltba-Erb1lLXpUbc5VVslavAZsi" target="_blank">En-Note</a>'
				]
			],
			"younite" => [
				'name' => "Younite",
				'debut' => '2022',
				'groupImage' => 'https://www.cheatsheet.com/wp-content/uploads/2022/05/YOUNITE.jpeg?w=1200&h=800',
				'members' => [ // list all members
					'Kyungmun' => [
						'image' => 'https://i.pinimg.com/originals/cd/71/a0/cd71a0b8dd7af551a9ffd12bbc9037aa.jpg',
						'birthday' => '6/29/2003',
						'notes' => [
							'',
							''
						]
					],
					'Eunsang' => [
						'image' => 'https://www.allkpop.com/upload/2022/02/content/142228/1644895715-flieep-auaecwqu.jpeg',
						'birthday' => '10/26/2002',
						'notes' => [
							'Pinky',
							''
						]
					],
					'Eunho' => [
						'image' => 'https://kpopping.com/documents/1b/0/220512-Younite-Twitter-Update-Eunho-documents-3.jpeg?v=052bb',
						'birthday' => '3/25/2001',
						'notes' => [
							'',
							''
						]
					],
					'Sion' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2020/12/IMG_2568-534x800.jpg',
						'birthday' => '10/19/2004',
						'notes' => [
							'',
							''
						]
					],
					'Hyunseung' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2020/12/IMG_2567-533x800.jpg',
						'birthday' => '10/15/2002',
						'notes' => [
							'',
							''
						]
					],
					'Woono' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2020/12/IMG_2562-534x800.jpg',
						'birthday' => '4/5/2003',
						'notes' => [
							'',
							''
						]
					],
					'Steve' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2020/12/IMG_2563-533x800.jpg',
						'birthday' => '3/9/2002',
						'notes' => [
							'',
							''
						]
					],
					'Hyungseok' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2020/12/IMG_2565-534x800.jpg',
						'birthday' => '11/6/2002',
						'notes' => [
							'',
							''
						]
					],
					'Dey' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2020/12/IMG_2569-534x800.jpg',
						'birthday' => '6/11/2003',
						'notes' => [
							'',
							''
						]
					]
				],
				'content' => [
					'series' => '<a href="https://www.youtube.com/playlist?list=PL71CwGySDJm2kdiM9MxZ1ewe15FHsctJL" target="_blank">The Younite</a>',
					'short' => '<a href="https://www.youtube.com/playlist?list=PL71CwGySDJm3OiOYV3NSUbjzl8N5Gvd3J" target="_blank">YouSB (Younite Special Behind)</a>',
					'long' => '',
					'vlogs' => '<a href="https://www.youtube.com/playlist?list=PL71CwGySDJm09rbwgwQjRb0iiagyKa4eF" target="_blank">You-Log</a>',
					'notes' => ''
				]
			],
			"skz" => [
				'name' => "Stray Kids",
				'debut' => '2018',
				'groupImage' => 'https://i1.sndcdn.com/artworks-bJq9khVs2cfoIgjc-zcty5w-t500x500.jpg',
				'members' => [
					'Han' => [
						'image' => 'http://pm1.narvii.com/6885/48be9a4a147c1522d344ba17395e66e908802d83r1-1365-2048v2_uhq.jpg',
						'birthday' => '9/2000',
						'notes' => [
							'',
							''
						]
					],
					'I.N' => [
						'image' => 'https://64.media.tumblr.com/8d488928a8290cdba99aea07d107ba02/727a37c37a5282d7-07/s1280x1920/6b2e0dac4a0a5e1c5e50e390817101d293d47b72.jpg',
						'birthday' => '2/2001',
						'notes' => [
							'',
							''
						]
					],
					'Felix' => [
						'image' => 'https://0.soompi.io/wp-content/uploads/2022/01/20104023/Felix-2.jpeg',
						'birthday' => '9/2000',
						'notes' => [
							'',
							''
						]
					],
					'Changbin' => [
						'image' => 'https://i.pinimg.com/originals/40/48/af/4048af2c6f34b6b6eb22919ac7bc1d5e.jpg',
						'birthday' => '8/1999',
						'notes' => [
							'',
							''
						]
					],
					'Bang Chan' => [
						'image' => 'http://pm1.narvii.com/7065/8588a625b332d58c0f84928da96c44d11a3ca3b8r1-1280-1919v2_uhq.jpg',
						'birthday' => '10/1997',
						'notes' => [
							'',
							''
						]
					],
					'Lee Know' => [
						'image' => 'https://www.pinkvilla.com/imageresize/lk_main.png?width=752&format=webp&t=pvorg',
						'birthday' => '10/1998',
						'notes' => [
							'',
							''
						]
					],
					'Seungmin' => [
						'image' => 'https://i.pinimg.com/originals/c8/36/41/c8364165e22a325e407ccd58fadb6df7.jpg',
						'birthday' => '9/2000',
						'notes' => [
							'',
							''
						]
					],
					'Hyunjin' => [
						'image' => 'https://pbs.twimg.com/media/EaUbspyVAAAIjr8?format=jpg&name=4096x4096',
						'birthday' => '3/2000',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '14s272BtCC2F63OPiOIaI4',
				'content' => [
					'series' => '<a href="https://www.youtube.com/playlist?list=PL2HLJ87twWI1DhyFxYbQRB4_JLKPIYXli" target="_blank">SKZ code</a>',
					'short' => '',
					'long' => '<a href="https://www.youtube.com/playlist?list=PL2HLJ87twWI17t3AiqazIlW1Zkx-iGj1P" target="_blank">SKZ talker</a>',
					'vlogs' => '<a href="https://www.youtube.com/playlist?list=PL2HLJ87twWI2LtBbGVL-JAB6NCtv8EBx-" target="_blank">SKZ vlog</a>',
					'notes' => ''
				]
			]
		]
	],
	'passive' => [
		'name' => 'Passively Stanning',
		'groups' => [
			"svt" => [
				'name' => "Seventeen",
				'debut' => '2015',
				'groupImage' => 'https://www.nme.com/wp-content/uploads/2022/04/seventeen-apple-collaboration-today-at-apple-session-myeondong-store-2022.jpg',
				'members' => [
					'Wonwoo' => [
						'image' => 'https://lh3.googleusercontent.com/fME1mY0J-ceNNLzhbrY-0ypeBBW9KeozFNGJYUiZvq1MVkuOU4B647AYeAJU-HcSKSZYeRI55NcMaGd-d7OivjoBtQ4r_GKDR_siHlC2LKM7PcY=w960-rj-nu-e365',
						'birthday' => '7/1996',
						'notes' => [
							'',
							''
						]
					],
					'S. Coups' => [
						'image' => 'https://i.pinimg.com/originals/08/a5/2d/08a52d95cb7c6d7a38a936c1c3364e31.jpg',
						'birthday' => '8/1995',
						'notes' => [
							'',
							''
						]
					],
					'Dino' => [
						'image' => 'https://i.pinimg.com/originals/d1/23/3d/d1233d3ff6111c74e846a18795470b61.jpg',
						'birthday' => '1/1999',
						'notes' => [
							'',
							''
						]
					],
					'DK' => [
						'image' => 'https://kpopping.com/documents/a9/4/2000/batch_LSH_6560-copy.jpeg',
						'birthday' => '2/1997',
						'notes' => [
							'',
							''
						]
					],
					'Hoshi' => [
						'image' => 'https://www.wowkorea.live/img/dispatch/0/1660/4185_560.jpg',
						'birthday' => '6/1996',
						'notes' => [
							'',
							''
						]
					],
					'Jeonghan' => [
						'image' => 'https://kpopnews.atsit.in/fr/wp-content/uploads/2021/10/seventeen-propose-un-concept-plus-mature-pourattaca-8.jpg',
						'birthday' => '10/1995',
						'notes' => [
							'',
							''
						]
					],
					'Joshua' => [
						'image' => 'https://lh3.googleusercontent.com/ReZsjITPBiUXOFb0s1lqHuB93wf_VHDmDVSMYD2Cvb83hjX56clsfWS8eRpqYArMgR_qUpkYa68efIhRh3r5uiDml1PKnDXr3g=w960-rj-nu-e365',
						'birthday' => '12/1995',
						'notes' => [
							'',
							''
						]
					],
					'Jun' => [
						'image' => 'https://pbs.twimg.com/media/EaF2Sj5UYAAUndB?format=jpg&name=large',
						'birthday' => '6/1996',
						'notes' => [
							'',
							''
						]
					],
					'Mingyu' => [
						'image' => 'https://www.hellokpop.com/wp-content/uploads/2020/03/IMG_20200318_121211-735x1024.jpg',
						'birthday' => '4/1997',
						'notes' => [
							'',
							''
						]
					],
					'Seungkwan' => [
						'image' => 'https://i0.wp.com/kstationtv.com/wp-content/uploads/2020/12/seung_kwan_seventeen_58281.jpg?fit=1000%2C1000&ssl=1',
						'birthday' => '1/1998',
						'notes' => [
							'',
							''
						]
					],
					'The8' => [
						'image' => 'https://i.pinimg.com/originals/5b/1d/ae/5b1daec6b1d988cfabbc815838f3c576.jpg',
						'birthday' => '11/1997',
						'notes' => [
							'',
							''
						]
					],
					'Vernon' => [
						'image' => 'https://pbs.twimg.com/media/FA1ZI-cVgAICaB1.jpg',
						'birthday' => '2/1998',
						'notes' => [
							'',
							''
						]
					],
					'Woozi' => [
						'image' => 'https://data.whicdn.com/images/335828913/original.jpg',
						'birthday' => '11/1996',
						'notes' => [
							'',
							''
						]
					],
				],
				'playlist' => '7ffiivsWECBNQCl1iscmKr',
				'content' => [
					'series' => '<a href="https://youtube.com/playlist?list=PLk_UmMfvZDx21Z9eEQ9DcIlUfZp1uwEup" title="Going Seventeen" target="_blank">GoSe</a>',
					'short' => '<a href="https://youtube.com/playlist?list=PLk_UmMfvZDx2Ya9Hy_B3qjaUefZ8zBDGR" target="_blank">Snapshoot</a>',
					'long' => '<a href="https://youtube.com/playlist?list=PLk_UmMfvZDx0jZNccOaFJbMqKwvwwUfAN" title="Inside Seventeen" target="_blank">Insa</a>',
					'vlogs' => '',
					'notes' => ''
				]
			],
			"astro" => [
				'name' => "Astro",
				'debut' => '2016',
				'groupImage' => 'https://media.allure.com/photos/5bd783857ae3892d58f59d5c/1:1/w_898,h_898,c_limit/k-pop%20group%20astro%20group%20photo.jpg',
				'members' => [
					'Sanha' => [
						'image' => 'https://i.pinimg.com/originals/84/1f/c2/841fc2c832c6f842ddf5139dc8a5a44e.jpg',
						'birthday' => '3/2000',
						'notes' => [
							'',
							''
						]
					],
					'JinJin' => [
						'image' => 'https://vfan-phinf.pstatic.net/20200507_297/15888077534831kbz9_JPEG/batch_MIN_9683-copy.jpg?type=e1920',
						'birthday' => '3/1996',
						'notes' => [
							'',
							''
						]
					],
					'MJ' => [
						'image' => 'https://pbs.twimg.com/media/FCxJEv0VgAAWeEC?format=jpg&name=large',
						'birthday' => '3/1994',
						'notes' => [
							'',
							''
						]
					],
					'Cha Eunwoo' => [
						'image' => 'https://static.wikia.nocookie.net/aroha/images/f/f2/Eunwoo_Profile_Photo_2022.png/revision/latest?cb=20220211095506',
						'birthday' => '3/1997',
						'notes' => [
							'',
							''
						]
					],
					'Moonbin' => [
						'image' => 'https://static.wikia.nocookie.net/aroha/images/2/22/Moonbin_Profile_Photo_2022.png/revision/latest?cb=20220211095524',
						'birthday' => '1/1998',
						'notes' => [
							'',
							''
						]
					],
					'Rocky' => [
						'image' => 'https://www.nme.com/wp-content/uploads/2021/12/astro-rocky-sit-out-group-activities-injuries-kbs-song-festival-2021-20211217.jpeg',
						'birthday' => '2/1999',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '3InHimfTiZNd7a0YIp19Jx',
				'content' => [
					'series' => '',
					'short' => 'ddoca',
					'long' => 'play',
					'vlogs' => '',
					'notes' => ''
				]
			],
			"bts" => [
				'name' => "BTS",
				'debut' => '2013',
				'groupImage' => 'https://cdn.i-scmp.com/sites/default/files/d8/images/canvas/2021/07/08/62d30fc0-81a2-4093-b5aa-182a94855233_386389bf.jpg',
				'members' => [ // list all members
					'Namjoon' => [
						'image' => 'https://i.pinimg.com/originals/c1/b9/43/c1b94382ad5ccc5cd188a796ebc25911.jpg',
						'birthday' => '9/12/1994',
						'notes' => [
							'been my bias since 2019',
							''
						]
					],
					'Yoongi' => [
						'image' => 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2020%2F11%2F06%2FMin-Yoongi.jpg&q=60',
						'birthday' => '3/9/1993',
						'notes' => [
							'I call him Oogi',
							''
						]
					],
					'Jimin' => [
						'image' => 'https://st1.bollywoodlife.com/wp-content/uploads/2021/05/Jimin-from-BTS.jpg',
						'birthday' => '10/13/1995',
						'notes' => [
							'',
							''
						]
					],
					'Hoseok' => [
						'image' => 'https://i.pinimg.com/originals/23/db/95/23db95f3a13c3f9850842d4498d74d01.jpg',
						'birthday' => '2/18/1994',
						'notes' => [
							'',
							''
						]
					],
					'Seokjin' => [
						'image' => 'https://i.pinimg.com/736x/99/87/5b/99875bafe7de1f6d53f1aabbb3d50617.jpg',
						'birthday' => '12/4/1992',
						'notes' => [
							'',
							''
						]
					],
					'Jungkook' => [
						'image' => 'https://www.teahub.io/photos/full/66-663407_jeon-jungkook-wallpaper-bts-bts-jungkook-wallpaper-hd.jpg',
						'birthday' => '9/1/1997',
						'notes' => [
							'',
							''
						]
					],
					'Taehyung' => [
						'image' => 'https://www.pinkvilla.com/imageresize/v_butter_main_2.png?width=752&format=webp&t=pvorg',
						'birthday' => '12/30/1995',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '7dcB1S5VnCKYZLLFZli2Eu',
				'content' => [
					'series' => 'run! BTS',
					'short' => 'bangtan bomb',
					'long' => 'episode',
					'vlogs' => '',
					'notes' => 'BTS logs'
				]
			],
			"ateez" => [
				'name' => "Ateez",
				'debut' => '2018',
				'groupImage' => 'https://images.squarespace-cdn.com/content/v1/56eb012f27d4bd29de975fae/1632602667384-6BGZ7CZ4CSHGH4KWBRX2/HIST_ATEEZ_Header.jpg',
				'members' => [ // list all members
					'Hongjoong' => [
						'image' => 'https://uploads.disquscdn.com/images/a11d7704756a4bc38c1079de037a56ef48793970d31f951cdf9dc96f2599da2c.jpg?w=800&h=1003',
						'birthday' => '11/7/1998',
						'notes' => [
							'',
							''
						]
					],
					'Mingi' => [
						'image' => 'https://uploads.disquscdn.com/images/5f346490b6bb53617e75ae4911f526bcdd34ca4373d9f8206840d471d65a8f15.jpg?w=800&h=1003',
						'birthday' => '8/9/1999',
						'notes' => [
							'',
							''
						]
					],
					'Seonghwa' => [
						'image' => 'https://uploads.disquscdn.com/images/fd9fd8123ebc0b942eeec74d3c52ca01a9ef31933795eff7ec16d0dbdb4414a5.jpg?w=800&h=1003',
						'birthday' => '4/3/1998',
						'notes' => [
							'',
							''
						]
					],
					'Yeosang' => [
						'image' => 'https://uploads.disquscdn.com/images/85bb948883576b1421c207461d1c5331acb08548e86dac17d17753f2480efffb.jpg?w=800&h=1003',
						'birthday' => '6/15/1999',
						'notes' => [
							'',
							''
						]
					],
					'San' => [
						'image' => 'https://uploads.disquscdn.com/images/156a9fb1a35e3b9883e37951b4af11bcab31a7a10132260eaf8c47d5ddc6f54d.jpg?w=800&h=1003',
						'birthday' => '7/10/1999',
						'notes' => [
							'',
							''
						]
					],
					'Yunho' => [
						'image' => 'https://uploads.disquscdn.com/images/942db888bec12a7ecb5efc34d1e06221f74cf8db3f2d7fd3976333099ffa75ca.jpg?w=800&h=1003',
						'birthday' => '3/23/1999',
						'notes' => [
							'',
							''
						]
					],
					'Wooyoung' => [
						'image' => 'https://uploads.disquscdn.com/images/0cc6a01a4bf7d7604e25acd546aa1fd3add2aa9ecbd7e9444211a056ca806a07.jpg?w=800&h=1003',
						'birthday' => '11/26/1999',
						'notes' => [
							'',
							''
						]
					],
					'Jongho' => [
						'image' => 'https://uploads.disquscdn.com/images/fd768fd7c3ad0919e6295853e652d95156f658ac4095440594992166b598d833.jpg?w=800&h=1003',
						'birthday' => '10/12/2000',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '3oUmVxX97L7R9Wsl90erUU',
				'content' => [
					'series' => '',
					'short' => '<a href="https://www.youtube.com/playlist?list=PL_G3lYLGW-D9gWN44A_A1TZQeY5gmhaXo" target="_blank">behind</a>',
					'long' => '',
					'vlogs' => '<a href="https://www.youtube.com/playlist?list=PL_G3lYLGW-D8QRXX2oeyfEfGw47g_Q7_W" target="_blank">ateez log</a>',
					'notes' => ''
				]
			],
			"twice" => [
				'name' => "Twice",
				'debut' => '2015',
				'groupImage' => 'https://upload.wikimedia.org/wikipedia/commons/f/f4/180717_%EC%97%B4%EB%A6%B0%EC%9D%8C%EC%95%85%ED%9A%8C_%ED%8A%B8%EC%99%80%EC%9D%B4%EC%8A%A4_02.jpg',
				'members' => [ // list all members
					'Jihyo' => [
						'image' => 'https://www.pinkvilla.com/files/twice_jihyo_style.jpg',
						'birthday' => '2/1/1997',
						'notes' => [
							'',
							''
						]
					],
					'Dahyun' => [
						'image' => 'https://kpopping.com/documents/6e/5/2000/TWICE-Dahyun-9th-Mini-Album-MORE-MORE-Music-Video-Shoot-by-Naver-x-Dispatch-documents-3.jpeg?v=51064',
						'birthday' => '5/28/1998',
						'notes' => [
							'',
							''
						]
					],
					'Nayeon' => [
						'image' => 'https://kpopping.com/documents/f6/3/1000/Nayeon1194.jpeg?v=9834a',
						'birthday' => '9/22/1995',
						'notes' => [
							'',
							''
						]
					],
					'Chaeyoung' => [
						'image' => 'https://image.kpopmap.com/2019/01/twice-scientist-member-profile-ChaeYoung.jpg',
						'birthday' => '4/23/1999',
						'notes' => [
							'',
							''
						]
					],
					'Momo' => [
						'image' => 'https://www.nme.com/wp-content/uploads/2021/11/TWICE_Momo_Formula_of_Love_OTHeart-jypentertainment-171121.jpg',
						'birthday' => '11/9/1996',
						'notes' => [
							'',
							''
						]
					],
					'Jeongyeon' => [
						'image' => 'http://images6.fanpop.com/image/photos/43300000/More-and-More-Jacket-Making-Film-jeongyeon-twice-43390542-1200-1800.jpg',
						'birthday' => '11/1/1996',
						'notes' => [
							'',
							''
						]
					],
					'Sana' => [
						'image' => 'https://64.media.tumblr.com/097148d20e9b4344930bf8ca57bd181a/eedbb4408a87883e-e9/s1280x1920/fec3afc2d11686729aa25d9c7cabdc411343204f.jpg',
						'birthday' => '12/29/1996',
						'notes' => [
							'',
							''
						]
					],
					'Mina' => [
						'image' => 'https://w0.peakpx.com/wallpaper/839/661/HD-wallpaper-mina-twice-kpop-myoui-mina-thumbnail.jpg',
						'birthday' => '3/24/1997',
						'notes' => [
							'',
							''
						]
					],
					'Tzuyu' => [
						'image' => 'https://qph.cf2.quoracdn.net/main-qimg-ecf80c68f97bc59d9100135216d6f0c5-lq',
						'birthday' => '6/14/1999',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '6NNQX5ZOZ7UlaCzwgAcrnG',
				'content' => [
					'series' => '',
					'short' => '',
					'long' => '',
					'vlogs' => '',
					'notes' => ''
				]
			],
			"redVelvet" => [
				'name' => "Red Velvet",
				'debut' => '2014',
				'groupImage' => 'https://www.nme.com/wp-content/uploads/2022/03/red-velvet-feel-my-rhythm-the-reve-festival-music-video-20220318.jpg',
				'members' => [ // list all members
					'Irene' => [
						'image' => 'https://getworldwideupdates.com/wp-content/uploads/2021/07/Irene-Red-Velvet-50-facts-you-should-know-about-Red-Velvet-Irene.jpg',
						'birthday' => '3/29/1991',
						'notes' => [
							'',
							''
						]
					],
					'Wendy' => [
						'image' => 'https://i.pinimg.com/736x/43/fc/5d/43fc5d399cdb3e196559220ea4a1ba0d.jpg',
						'birthday' => '2/10/1994',
						'notes' => [
							'',
							''
						]
					],
					'Joy' => [
						'image' => 'https://i.pinimg.com/originals/25/fe/27/25fe273c5e4e8efe9392d30459513b13.jpg',
						'birthday' => '9/3/1996',
						'notes' => [
							'',
							''
						]
					],
					'Yeri' => [
						'image' => 'https://i.pinimg.com/originals/ea/8f/59/ea8f59d5e95787403340da72c17c61ed.jpg',
						'birthday' => '3/5/1999',
						'notes' => [
							'',
							''
						]
					],
					'Seulgi' => [
						'image' => 'https://i.pinimg.com/originals/7d/3b/9d/7d3b9da836ea9044474eeb5d5971bf85.jpg',
						'birthday' => '2/10/1994',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '2SeRAZDvNjdenPEBEm4cn3',
				'content' => [
					'series' => '',
					'short' => '',
					'long' => '',
					'vlogs' => '',
					'notes' => ''
				]
			],
			"day6" => [
				'name' => "Day6",
				'debut' => '2015-2021',
				'groupImage' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/180628_Day6.jpg/800px-180628_Day6.jpg',
				'members' => [ // list all members
					'Young K' => [
						'image' => 'https://i.pinimg.com/originals/36/6d/18/366d18269d4ddd98a64081e315f923b6.jpg',
						'birthday' => '12/19/1993',
						'notes' => [
							'',
							''
						]
					],
					'Sungjin' => [
						'image' => 'https://pm1.narvii.com/6487/401ba8c6081f2088544030a4f1922a2496b261f4_hq.jpg',
						'birthday' => '1/16/1993',
						'notes' => [
							'',
							''
						]
					],
					'Wonpil' => [
						'image' => 'http://res.heraldm.com/content/image/2022/02/07/20220207000750_0.jpg',
						'birthday' => '4/28/1994',
						'notes' => [
							'',
							''
						]
					],
					'Dowoon' => [
						'image' => 'http://pm1.narvii.com/6993/a82f26313ce1f11729a5354a8282dd1e266b591br1-1200-1800v2_uhq.jpg',
						'birthday' => '8/25/1995',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '4KsT8BBS20imRpmYAuwkyR',
				'content' => [
					'series' => '',
					'short' => '',
					'long' => '',
					'vlogs' => '',
					'notes' => ''
				]
			],
			"got7" => [
				'name' => "Got7",
				'debut' => '2014',
				'groupImage' => 'https://6.viki.io/image/adb69ef77b5f423d831788f54728ac94.jpeg?s=900x600&e=t',
				'members' => [ // list all members
					'Mark' => [
						'image' => 'https://chingutotheworld.com/wp-content/uploads/2019/07/f2da7f43e3c9cdfcfa473bf0c61d6fc2.jpg',
						'birthday' => '9/4/1993',
						'notes' => [
							'',
							''
						]
					],
					'Yugyeom' => [
						'image' => 'https://static.wikia.nocookie.net/got7/images/a/a5/GOT7_Wiki_Yugyeom_Profile_Image.jpg/revision/latest?cb=20201123111754',
						'birthday' => '11/17/1997',
						'notes' => [
							'',
							''
						]
					],
					'Jackson' => [
						'image' => 'https://w0.peakpx.com/wallpaper/633/802/HD-wallpaper-jackson-wang-aghase-got7-igot7-jyp.jpg',
						'birthday' => '3/28/1994',
						'notes' => [
							'',
							''
						]
					],
					'Jay B' => [
						'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d6/JAY_B_in_May_2021.jpg',
						'birthday' => '1/6/1994',
						'notes' => [
							'',
							''
						]
					],
					'Jinyoung' => [
						'image' => 'https://static.wikia.nocookie.net/got7/images/3/3e/GOT7_Wiki_Jinyoung_Profile_Image.jpg/revision/latest?cb=20201123111950',
						'birthday' => '9/22/1994',
						'notes' => [
							'',
							''
						]
					],
					'Youngjae' => [
						'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/Youngjae_in_November_2021.jpg',
						'birthday' => '9/17/1996',
						'notes' => [
							'',
							''
						]
					],
					'BamBam' => [
						'image' => 'https://www.rappler.com/tachyon/2021/05/got7-bambam-solo-album-june-2021.jpeg',
						'birthday' => '5/2/1997',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '3GdS97TJ97A4eDhWVUbcjq',
				'content' => [
					'series' => '',
					'short' => '',
					'long' => '',
					'vlogs' => '',
					'notes' => ''
				]
			],
			"exo" => [
				'name' => "EXO",
				'debut' => '2012',
				'groupImage' => 'https://img.i-scmp.com/cdn-cgi/image/fit=contain,width=1098,format=auto/sites/default/files/styles/1200x800/public/d8/images/methode/2021/05/11/1fd3dd62-b205-11eb-93b7-03206dd91175_image_hires_173202.jpg?itok=LHdtrWYa&v=1620725529',
				'members' => [ // list all members
					'Chanyeol' => [
						'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a8/Chanyeol_during_the_Exo_Planet_5_%E2%80%93_Exploration_concert_on_December_2019.jpg',
						'birthday' => '11/27/1992',
						'notes' => [
							'',
							''
						]
					],
					'Sehun' => [
						'image' => 'https://static.wikia.nocookie.net/thelostplanet/images/6/6b/Sehun_%28Don%27t_Fight_The_Feeling%29_4.png/revision/latest?cb=20210527021013',
						'birthday' => '4/12/1994',
						'notes' => [
							'',
							''
						]
					],
					'Baekhyun' => [
						'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Baekhyun_at_EXplOration_in_Taipei_in_28_September_2019.jpg',
						'birthday' => '5/6/1992',
						'notes' => [
							'',
							''
						]
					],
					'Suho' => [
						'image' => 'https://img.koreatimes.co.kr/upload/newsV2/images/202005/87648be438fb42faa72d742210f689ef.jpg/dims/resize/740/optimize',
						'birthday' => '5/22/1991',
						'notes' => [
							'',
							''
						]
					],
					'Xiumin' => [
						'image' => 'https://cdn.i-scmp.com/sites/default/files/d8/images/methode/2020/11/23/d6dc5064-2d64-11eb-be20-200ca6256645_972x_184642.jpg',
						'birthday' => '3/26/1990',
						'notes' => [
							'',
							''
						]
					],
					'Lay' => [
						'image' => 'https://img.i-scmp.com/cdn-cgi/image/fit=contain,width=425,format=auto/sites/default/files/styles/768x768/public/d8/images/canvas/2022/04/08/68e8b5ca-e993-4745-8bac-66963d3f369a_b7b79c61.jpg?itok=bw_VHS-l&v=1649391536',
						'birthday' => '10/7/1991',
						'notes' => [
							'',
							''
						]
					],
					'Chen' => [
						'image' => 'https://www.rappler.com/tachyon/2020/10/20201016-EXO-Chen.jpg',
						'birthday' => '9/21/1992',
						'notes' => [
							'',
							''
						]
					],
					'D.O.' => [
						'image' => 'https://img.koreatimes.co.kr/upload/newsV2/images/202101/4d467950bad446fea387edbe6fc9a054.jpg/dims/resize/740/optimize',
						'birthday' => '1/12/1993',
						'notes' => [
							'',
							''
						]
					],
					'Kai' => [
						'image' => 'https://static.wikia.nocookie.net/thelostplanet/images/4/48/Kai_%28Don%27t_Fight_The_Feeling%29_4.png/revision/latest?cb=20210527021422',
						'birthday' => '1/14/1994',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '5c9pUbQkYBJyYjptht1etK',
				'content' => [
					'series' => '',
					'short' => '',
					'long' => '',
					'vlogs' => '',
					'notes' => ''
				]
			],
			"monstaX" => [
				'name' => "Monsta X",
				'debut' => '2015',
				'groupImage' => 'https://www.billboard.com/wp-content/uploads/media/01-Monsta-X-2020-tour-press-billboard-1548.jpg',
				'members' => [ // list all members
					'I.M' => [
						'image' => 'https://w0.peakpx.com/wallpaper/838/630/HD-wallpaper-im-changkyun-fatal-love-im-changkyun-im-monsta-x-kpop-love-killa-monsta-x-monsta-x-love-killa-monstax.jpg',
						'birthday' => '9/12/1994',
						'notes' => [
							'',
							''
						]
					],
					'Hyungwon' => [
						'image' => 'https://pbs.twimg.com/media/EYYd_-GU0AY2vK1?format=jpg&name=large',
						'birthday' => '3/9/1993',
						'notes' => [
							'',
							''
						]
					],
					'Minhyuk' => [
						'image' => 'https://i.pinimg.com/736x/2e/bc/25/2ebc25b9c000f5dce368d2ea81dc5590.jpg',
						'birthday' => '10/13/1995',
						'notes' => [
							'',
							''
						]
					],
					'Jooheon' => [
						'image' => 'https://channel-korea.com/wp-content/uploads/2019/06/D7l_VkeXoAATx4N.jpg',
						'birthday' => '2/18/1994',
						'notes' => [
							'',
							''
						]
					],
					'Kihyun' => [
						'image' => 'https://lh3.googleusercontent.com/FXGCznRF1tYKnD_e91NrPZH9Tqy5ihZM0txQtSberBaviOGHpFKe3zd8HBiQ7hKADlnEpGip3whGkIzgrPEK53bG-ErrehUf-Tp-W2csKyWK0Xk=w960-rj-nu-e365',
						'birthday' => '12/4/1992',
						'notes' => [
							'',
							''
						]
					]
				],
				'playlist' => '6Dco0FqP39FTXBuJfHhsJg',
				'content' => [
					'series' => '',
					'short' => '',
					'long' => '',
					'vlogs' => '',
					'notes' => ''
				]
			]
		]
	],
	'learning' => [
		'name' => 'Learning Currently',
		'groups' => [
			"8turn" => [
				'name' => "8Turn",
				'debut' => '2023',
				'groupImage' => 'https://i.redd.it/8turn-debut-mini-album-8turnrise-concept-photos-group-v0-qwfy9by3fdca1.jpg?width=2147&format=pjpg&auto=webp&s=a6f2371f3317033881d9d51726633b130228bbf8',
				'members' => [ // list all members
					'Haemin' => [
						'image' => 'https://kpopping.com/documents/b6/4/Haemin-fullBodyPicture.webp?v=cdb46',
						'birthday' => '3/16/2004',
						'notes' => [
							'',
							''
						]
					],
					'Kyungmin' => [
						'image' => 'https://kpopping.com/documents/4f/4/221127-8TURN-Kyungmin-Twitter-Update-documents-1.jpeg?v=e29c8',
						'birthday' => '10/28/2004',
						'notes' => [
							'',
							''
						]
					],
					'Minho' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2022/10/FmVis3XaYAI0PT8-534x800.jpeg',
						'birthday' => '10/14/2002',
						'notes' => [
							'',
							''
						]
					],
					'Yungyu' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2022/10/FmWkQ_oaEAIBQYA-534x800.jpeg',
						'birthday' => '9/7/2005',
						'notes' => [
							'',
							''
						]
					],
					'Seungheon' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2022/10/FmWkdM_agAAVFxg-900x600.jpeg',
						'birthday' => '5/15/2007',
						'notes' => [
							'',
							''
						]
					],
					'Myungho' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2022/10/FmPmzQHagAELEF2-534x800.jpeg',
						'birthday' => '10/12/2001',
						'notes' => [
							'',
							''
						]
					],
					'Jaeyun' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2022/10/FmPnGBIaUAAjvV7-534x800.jpeg',
						'birthday' => '7/2/2002',
						'notes' => [
							'',
							''
						]
					],
					'Yoonsung' => [
						'image' => 'https://kprofiles.com/wp-content/uploads/2022/10/FmVi7pcaYAAQy5B-900x600.jpeg',
						'birthday' => '11/13/2003',
						'notes' => [
							'',
							''
						]
					]
				],
				'content' => [
					'series' => '',
					'short' => '',
					'long' => '',
					'vlogs' => '',
					'notes' => ''
				]
			]
		]
	]
];