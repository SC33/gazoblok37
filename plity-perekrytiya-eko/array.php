<?php $price1 = json_decode('[
{"pb":"ПБ 108-12-4", "m":"3826", "n0":"17 591", "col":"5"},
{"pb":"ПБ 107-12-4", "m":"3791", "n0":"17 428", "col":"5"},
{"pb":"ПБ 106-12-4", "m":"3755", "n0":"17 265", "col":"5"},
{"pb":"ПБ 105-12-4", "m":"3720", "n0":"17 102", "col":"5"},
{"pb":"ПБ 104-12-4", "m":"3684", "n0":"16 939", "col":"5"},
{"pb":"ПБ 103-12-4", "m":"3649", "n0":"16 775", "col":"5"},
{"pb":"ПБ 102-12-5", "m":"3613", "n0":"16 613", "col":"5"},
{"pb":"ПБ 101-12-5", "m":"3578", "n0":"16 449", "col":"5"},
{"pb":"ПБ 100-12-5", "m":"3542", "n0":"16 286", "col":"5"},
{"pb":"ПБ 99-12-5", "m":"3507", "n0":"16 123", "col":"5"},
{"pb":"ПБ 98-12-5", "m":"3471", "n0":"15 960", "col":"5"},
{"pb":"ПБ 97-12-5", "m":"3436", "n0":"15 797", "col":"5"},
{"pb":"ПБ 96-12-6", "m":"3400", "n0":"15 633", "col":"5"},
{"pb":"ПБ 95-12-6", "m":"3365", "n0":"15 470", "col":"6"},
{"pb":"ПБ 94-12-6", "m":"3329", "n0":"15 308", "col":"6"},
{"pb":"ПБ 93-12-6", "m":"3294", "n0":"15 144", "col":"6"},
{"pb":"ПБ 92-12-6", "m":"3258", "n0":"14 981", "col":"6"},
{"pb":"ПБ 91-12-6", "m":"3223", "n0":"14 818", "col":"6"},
{"pb":"ПБ 90-12-8", "m":"3187", "n6":"14 148", "n8":"14 568", "n8p":"14 868", "col":"6"},
{"pb":"ПБ 89-12-8", "m":"3152", "n6":"14 030", "n8":"14 451", "n8p":"14 751", "col":"6"},
{"pb":"ПБ 88-12-8", "m":"3116", "n6":"13 844", "n8":"14 265", "n8p":"14 565", "col":"6"},
{"pb":"ПБ 87-12-8", "m":"3081", "n6":"13 707", "n8":"14 128", "n8p":"14 428", "col":"6"},
{"pb":"ПБ 86-12-8", "m":"3045", "n6":"13 551", "n8":"13 971", "n8p":"14 271", "col":"6"},
{"pb":"ПБ 85-12-8", "m":"3010", "n6":"13 384", "n8":"13 805", "n8p":"14 105", "col":"6"},
{"pb":"ПБ 84-12-8", "m":"2974", "n6":"13 208", "n8":"13 629", "n10":"13 470", "n8p":"13 929", "col":"6"},
{"pb":"ПБ 83-12-8", "m":"2939", "n6":"12 925", "n8":"13 345", "n10":"14 186", "n8p":"13 645", "col":"6"},
{"pb":"ПБ 82-12-8", "m":"2903", "n6":"12 837", "n8":"13 257", "n10":"14 098", "n8p":"13 557", "col":"6"},
{"pb":"ПБ 81-12-8", "m":"2868", "n6":"12 465", "n8":"12 885", "n10":"13 726", "n8p":"13 185", "col":"7"},
{"pb":"ПБ 80-12-8", "m":"2832", "n6":"12 237", "n8":"12 657", "n10":"13 498", "n8p":"12 957", "col":"7"},
{"pb":"ПБ 79-12-8", "m":"2797", "n6":"12 078", "n8":"12 499", "n10":"13 340", "n8p":"12 799", "col":"7"},
{"pb":"ПБ 78-12-8", "m":"2761", "n6":"11 758", "n8":"12 175", "n10":"12 591", "n12":"13 008", "n8p":"12 475", "col":"7"},
{"pb":"ПБ 77-12-8", "m":"2726", "n6":"11 563", "n8":"11 980", "n10":"12 396", "n12":"12 813", "n8p":"12 280", "col":"7"},
{"pb":"ПБ 76-12-8", "m":"2690", "n6":"11 398", "n8":"11 815", "n10":"12 231", "n12":"12 648", "n8p":"12 115", "col":"7"},
{"pb":"ПБ 75-12-8", "m":"2655", "n6":"11 156", "n8":"11 573", "n10":"11 989", "n12":"12 406", "n8p":"11 873", "col":"7"},
{"pb":"ПБ 74-12-8", "m":"2620", "n6":"11 001", "n8":"11 418", "n10":"11 834", "n12":"12 251", "n8p":"11 718", "col":"7"},
{"pb":"ПБ 73-12-8", "m":"2584", "n6":"11 112", "n8":"11 321", "n10":"11 529", "n12":"11 737", "n8p":"11 621", "col":"7"},
{"pb":"ПБ 72-12-8", "m":"2548", "n6":"10 734", "n8":"10 943", "n10":"11 151", "n12":"11 359", "n8p":"11 243", "col":"8"},
{"pb":"ПБ 71-12-8", "m":"2513", "n6":"10 114", "n8":"10 322", "n10":"10 531", "n12":"10 739", "n8p":"10 622", "col":"8"},
{"pb":"ПБ 70-12-8", "m":"2477", "n6":"10 017", "n8":"10 225", "n10":"10 434", "n12":"10 642", "n8p":"10 525", "col":"8"},
{"pb":"ПБ 69-12-8", "m":"2442", "n6":"9 901", "n8":"10 109", "n10":"10 317", "n12":"10 526", "n8p":"10 409", "col":"8"},
{"pb":"ПБ 68-12-8", "m":"2406", "n6":"9 794", "n8":"10 002", "n10":"10 211", "n12":"10 419", "n8p":"10 302", "col":"8"},
{"pb":"ПБ 67-12-8", "m":"2371", "n6":"9 697", "n8":"9 906", "n10":"10 114", "n12":"10 322", "n8p":"10 206", "col":"8"},
{"pb":"ПБ 66-12-8", "m":"2335", "n6":"9 591", "n8":"9 799", "n10":"10 007", "n12":"10 215", "n8p":"10 099", "col":"8"},
{"pb":"ПБ 65-12-8", "m":"2300", "n6":"9 465", "n8":"9 673", "n10":"9 881", "n12":"10 089", "n8p":"9 973", "col":"8"},
{"pb":"ПБ 64-12-8", "m":"2265", "n6":"9 300", "n8":"9 508", "n10":"9 716", "n12":"9 925", "n8p":"9 808", "col":"8"},
{"pb":"ПБ 63-12-8", "m":"2229", "n6":"9 027", "n8":"9 132", "n10":"9 236", "n12":"9 340", "n8p":"9 432", "col":"9"},
{"pb":"ПБ 62-12-8", "m":"2194", "n6":"8 882", "n8":"8 986", "n10":"9 090", "n12":"9 194", "n8p":"9 286", "col":"9"},
{"pb":"ПБ 61-12-8", "m":"2159", "n6":"8 737", "n8":"8 841", "n10":"8 945", "n12":"9 049", "n8p":"9 141", "col":"9"},
{"pb":"ПБ 60-12-8", "m":"2123", "n6":"8 591", "n8":"8 695", "n10":"8 799", "n12":"8 904", "n8p":"8 995", "col":"9"},
{"pb":"ПБ 59-12-8", "m":"2087", "n6":"8 446", "n8":"8 550", "n10":"8 654", "n12":"8 758", "n8p":"8 850", "col":"9"},
{"pb":"ПБ 58-12-8", "m":"2052", "n6":"8 300", "n8":"8 404", "n10":"8 509", "n12":"8 613", "n8p":"8 704", "col":"9"},
{"pb":"ПБ 57-12-8", "m":"2016", "n6":"8 155", "n8":"8 259", "n10":"8 363", "n12":"8 467", "n8p":"8 559", "col":"10"},
{"pb":"ПБ 56-12-8", "m":"1981", "n6":"8 010", "n8":"8 114", "n10":"8 218", "n12":"8 322", "n8p":"8 414", "col":"10"},
{"pb":"ПБ 55-12-8", "m":"1945", "n6":"7 864", "n8":"7 968", "n10":"8 072", "n12":"8 177", "n8p":"8 268", "col":"10"},
{"pb":"ПБ 54-12-8", "m":"1910", "n6":"7 719", "n8":"7 823", "n10":"7 927", "n12":"8 031", "n8p":"8 123", "col":"10"},
{"pb":"ПБ 53-12-8", "m":"1874", "n6":"7 573", "n8":"7 677", "n10":"7 782", "n12":"7 886", "n8p":"7 977", "col":"10"},
{"pb":"ПБ 52-12-8", "m":"1839", "n6":"7 428", "n8":"7 532", "n10":"7 636", "n12":"7 740", "n8p":"7 832", "col":"10"},
{"pb":"ПБ 51-12-8", "m":"1803", "n6":"7 283", "n8":"7 387", "n10":"7 491", "n12":"7 595", "n8p":"7 687", "col":"11"},
{"pb":"ПБ 50-12-8", "m":"1768", "n6":"7 137", "n8":"7 241", "n10":"7 345", "n12":"7 449", "n8p":"7 541", "col":"11"},
{"pb":"ПБ 49-12-8", "m":"1732", "n6":"6 992", "n8":"7 096", "n10":"7 200", "n12":"7 304", "n8p":"7 396", "col":"11"},
{"pb":"ПБ 48-12-8", "m":"1697", "n6":"6 846", "n8":"6 950", "n10":"7 055", "n12":"7 159", "n8p":"7 250", "col":"11"},
{"pb":"ПБ 47-12-8", "m":"1661", "n6":"6 598", "n8":"6 702", "n10":"6 806", "n12":"6 910", "n8p":"7 002", "col":"12"},
{"pb":"ПБ 46-12-8", "m":"1626", "n6":"6 454", "n8":"6 559", "n10":"6 663", "n12":"6 767", "n8p":"6 859", "col":"12"},
{"pb":"ПБ 45-12-8", "m":"1590", "n6":"6 311", "n8":"6 415", "n10":"6 519", "n12":"6 624", "n8p":"6 715", "col":"12"},
{"pb":"ПБ 44-12-8", "m":"1555", "n6":"6 220", "n8":"6 272", "n10":"6 324", "n12":"6 376", "n8p":"6 572", "col":"12"},
{"pb":"ПБ 43-12-8", "m":"1519", "n6":"6 077", "n8":"6 129", "n10":"6 181", "n12":"6 233", "n8p":"6 429", "col":"13"},
{"pb":"ПБ 42-12-8", "m":"1484", "n6":"5 934", "n8":"5 986", "n10":"6 038", "n12":"6 090", "n8p":"6 286", "col":"13"},
{"pb":"ПБ 41-12-8", "m":"1448", "n6":"5 790", "n8":"5 843", "n10":"5 895", "n12":"5 947", "n8p":"6 143", "col":"13"},
{"pb":"ПБ 40-12-8", "m":"1413", "n6":"5 647", "n8":"5 699", "n10":"5 751", "n12":"5 803", "n8p":"5 999", "col":"14"},
{"pb":"ПБ 39-12-8", "m":"1377", "n6":"5 504", "n8":"5 556", "n10":"5 608", "n12":"5 660", "n8p":"5 856", "col":"14"},
{"pb":"ПБ 38-12-8", "m":"1342", "n6":"5 361", "n8":"5 413", "n10":"5 465", "n12":"5 517", "n8p":"5 713", "col":"14"},

{"pb":"ПБ 37-12-8", "m":"1306", "n6":"5 218", "n8":"5 270", "n10":"5 322", "n12":"5 374", "n8p":"5 570", "col":"15"},
{"pb":"ПБ 36-12-8", "m":"1271", "n6":"5 127", "n8":"5 127", "n10":"5 179", "n12":"5 231", "n8p":"5 427", "col":"15"},
{"pb":"ПБ 35-12-8", "m":"1235", "n6":"4 983", "n8":"4 983", "n10":"5 035", "n12":"5 087", "n8p":"5 283", "col":"16"},
{"pb":"ПБ 34-12-8", "m":"1200", "n6":"4 840", "n8":"4 840", "n10":"4 892", "n12":"4 944", "n8p":"5 140", "col":"16"},
{"pb":"ПБ 33-12-8", "m":"1164", "n6":"4 697", "n8":"4 697", "n10":"4 749", "n12":"4 801", "n8p":"4 997", "col":"17"},
{"pb":"ПБ 32-12-8", "m":"1129", "n6":"4 554", "n8":"4 554", "n10":"4 554", "n12":"4 554", "n8p":"4 854", "col":"17"},
{"pb":"ПБ 31-12-8", "m":"1093", "n6":"4 411", "n8":"4 411", "n10":"4 411", "n12":"4 411", "n8p":"4 711", "col":"18"},
{"pb":"ПБ 30-12-8", "m":"1058", "n6":"4 267", "n8":"4 267", "n10":"4 267", "n12":"4 267", "n8p":"4 567", "col":"18"},
{"pb":"ПБ 29-12-8", "m":"1022", "n6":"4 124", "n8":"4 124", "n10":"4 124", "n12":"4 124", "n8p":"4 424", "col":"19"},
{"pb":"ПБ 28-12-8", "m":"987", "n6":"3 981", "n8":"3 981", "n10":"3 981", "n12":"3 981", "n8p":"4 281", "col":"20"},
{"pb":"ПБ 27-12-8", "m":"951", "n6":"3 838", "n8":"3 838", "n10":"3 838", "n12":"3 838", "n8p":"4 138", "col":"21"},
{"pb":"ПБ 26-12-8", "m":"916", "n6":"3 695", "n8":"3 695", "n10":"3 695", "n12":"3 695", "n8p":"3 995", "col":"22"},
{"pb":"ПБ 25-12-8", "m":"880", "n6":"3 551", "n8":"3 551", "n10":"3 551", "n12":"3 551", "n8p":"3 851", "col":"22"},
{"pb":"ПБ 24-12-8", "m":"845", "n6":"3 408", "n8":"3 408", "n10":"3 408", "n12":"3 408", "n8p":"3 708", "col":"23"},
{"pb":"ПБ 23-12-8", "m":"810", "n6":"3 265", "n8":"3 265", "n10":"3 265", "n12":"3 265", "n8p":"3 565", "col":"24"},
{"pb":"ПБ 22-12-8", "m":"774", "n6":"3 122", "n8":"3 122", "n10":"3 122", "n12":"3 122", "n8p":"3 422", "col":"25"},
{"pb":"ПБ 21-12-8", "m":"738", "n6":"2 979", "n8":"2 979", "n10":"2 979", "n12":"2 979", "n8p":"3 279", "col":"27"},
{"pb":"ПБ 20-12-8", "m":"703", "n6":"2 835", "n8":"2 835", "n10":"2 835", "n12":"2 835", "n8p":"3 135", "col":"28"},
{"pb":"ПБ 19-12-8", "m":"667", "n6":"2 692", "n8":"2 692", "n10":"2 692", "n12":"2 692", "n8p":"2 992", "col":"30"},
{"pb":"ПБ 18-12-8", "m":"632", "n6":"2 549", "n8":"2 549", "n10":"2 549", "n12":"2 549", "n8p":"2 849", "col":"31"},
{"pb":"ПБ 17-12-8", "m":"590", "n6":"2 406", "n8":"2 406", "n10":"2 406", "n12":"2 406", "n8p":"2 706", "col":"34"}
    ]',true);
$price2 = json_decode('[
{"pb":"ЗПБ 120-12-8", "m":"5 369", "n6":"34 434", "n8":"35 149", "col":"3"},
{"pb":"ЗПБ 119-12-8", "m":"5 324", "n6":"34 147", "n8":"34 856", "col":"3"},
{"pb":"ЗПБ 118-12-8", "m":"5 279", "n6":"33 860", "n8":"34 563", "col":"3"},
{"pb":"ЗПБ 117-12-8", "m":"5 234", "n6":"33 573", "n8":"34 270", "col":"3"},
{"pb":"ЗПБ 116-12-8", "m":"5 190", "n6":"33 287", "n8":"33 977", "col":"3"},
{"pb":"ЗПБ 115-12-8", "m":"5 145", "n6":"33 000", "n8":"33 684", "col":"3"},
{"pb":"ЗПБ 114-12-8", "m":"5 087", "n6":"32 713", "n8":"33 392", "col":"3"},
{"pb":"ЗПБ 113-12-8", "m":"5 043", "n6":"32 426", "n8":"33 099", "col":"3"},
{"pb":"ЗПБ 112-12-8", "m":"4 998", "n6":"32 139", "n8":"32 806", "col":"4"},
{"pb":"ЗПБ 111-12-8", "m":"4 953", "n6":"31 852", "n8":"32 513", "col":"4"},
{"pb":"ЗПБ 110-12-8", "m":"4 908", "n6":"31 565", "n8":"32 220", "col":"4"},
{"pb":"ЗПБ 109-12-8", "m":"4 864", "n6":"31 278", "n8":"31 927", "col":"4"},
{"pb":"ЗПБ 108-12-8", "m":"4 803", "n6":"30 991", "n8":"31 634", "n10":"32 745", "col":"4"},
{"pb":"ЗПБ 107-12-8", "m":"4 759", "n6":"30 704", "n8":"31 341", "n10":"32 442", "col":"4"},
{"pb":"3ПБ 106-12-8", "m":"4 714", "n6":"30 417", "n8":"31 048", "n10":"32 139", "col":"4"},
{"pb":"ЗПБ 105-12-8", "m":"4 670", "n6":"30 130", "n8":"30 755", "n10":"31 835", "col":"4"},
{"pb":"ЗПБ 104-12-8", "m":"4 625", "n6":"29 843", "n8":"30 462", "n10":"31 532", "n12":"31 758", "col":"4"},
{"pb":"ЗПБ 103-12-8", "m":"4 581", "n6":"29 556", "n8":"30 170", "n10":"31 229", "n12":"31 452", "col":"4"},
{"pb":"ЗПБ 102-12-8", "m":"4 528", "n6":"29 269", "n8":"29 877", "n10":"30 926", "n12":"31 147", "col":"4"},
{"pb":"ЗПБ 101-12-8", "m":"4 483", "n6":"28 982", "n8":"29 584", "n10":"30 623", "n12":"30 841", "col":"4"},
{"pb":"ЗПБ 100-12-8", "m":"4 439", "n6":"28 695", "n8":"29 291", "n10":"30 320", "n12":"30 536", "col":"4"},
{"pb":"ЗПБ 99-12-8", "m":"4 395", "n6":"28 408", "n8":"28 998", "n10":"30 016", "n12":"30 231", "col":"4"},
{"pb":"ЗПБ 98-12-8", "m":"4 350", "n6":"28 121", "n8":"28 705", "n10":"29 713", "n12":"29 925", "col":"4"},
{"pb":"ЗПБ 97-12-8", "m":"4 306", "n6":"27 834", "n8":"28 412", "n10":"29 410", "n12":"29 620", "col":"4"},
{"pb":"ЗПБ 96-12-8", "m":"4 255", "n6":"27 547", "n8":"28 119", "n10":"29 107", "n12":"29 315", "col":"4"},
{"pb":"ЗПБ 95-12-8", "m":"4 211", "n6":"27 260", "n8":"27 826", "n10":"28 804", "n12":"29 009", "col":"4"},
{"pb":"ЗПБ 94-12-8", "m":"4 166", "n6":"26 974", "n8":"27 533", "n10":"28 500", "n12":"28 704", "col":"4"},
{"pb":"ЗПБ 93-12-8", "m":"4 122", "n6":"26 687", "n8":"27 240", "n10":"28 197", "n12":"28 399", "col":"4"},
{"pb":"ЗПБ 92-12-8", "m":"4 077", "n6":"26 400", "n8":"26 948", "n10":"27 894", "n12":"28 093", "col":"4"},
{"pb":"ЗПБ 91-12-8", "m":"4 033", "n6":"26 113", "n8":"26 655", "n10":"27 591", "n12":"27 788", "col":"5"}
    ]',true);
$price3 = json_decode('[
{"pb":"1.6ПБ 84-12-4,5", "m":"2604", "n":"12 767", "col":"7"},
{"pb":"1.6ПБ 83-12-4,5", "m":"2573", "n":"12 615", "col":"7"},
{"pb":"1.6ПБ 82-12-4,5", "m":"2542", "n":"12 463", "col":"7"},
{"pb":"1.6ПБ 81-12-5", "m":"2511", "n":"12 311", "col":"8"},
{"pb":"1.6ПБ 80-12-5", "m":"2480", "n":"12 159", "col":"8"},
{"pb":"1.6ПБ 79-12-5,5", "m":"2449", "n":"12 007", "col":"8"},
{"pb":"1.6ПБ 78-12-6", "m":"2418", "n":"11 855", "col":"8"},
{"pb":"1.6ПБ 77-12-6 ", "m":"2387", "n":"11 703", "col":"8"},
{"pb":"1.6ПБ 76-12-6 ", "m":"2356", "n":"11 551", "col":"8"},
{"pb":"1.6ПБ 75-12-6 ", "m":"2325", "n":"11 399", "col":"8"},
{"pb":"1.6ПБ 74-12-6 ", "m":"2294", "n":"11 247", "col":"8"},
{"pb":"1.6ПБ 73-12-6 ", "m":"2263", "n":"11 095", "col":"8"},
{"pb":"1.6ПБ 72-12-8 ", "m":"2232", "n":"10 943", "col":"9"},
{"pb":"1.6ПБ 71-12-8 ", "m":"2201", "n":"10 322", "col":"9"},
{"pb":"1.6ПБ 70-12-8 ", "m":"2170", "n":"10 225", "col":"9"},
{"pb":"1.6ПБ 69-12-8 ", "m":"2139", "n":"10 109", "col":"9"},
{"pb":"1.6ПБ 68-12-8 ", "m":"2108", "n":"10 002", "col":"9"},
{"pb":"1.6ПБ 67-12-8 ", "m":"2077", "n":"9 906", "col":"9"},
{"pb":"1.6ПБ 66-12-8 ", "m":"2046", "n":"9 799", "col":"9"},
{"pb":"1.6ПБ 65-12-8 ", "m":"2015", "n":"9 673", "col":"9"},
{"pb":"1.6ПБ 64-12-8 ", "m":"1984", "n":"9 508", "col":"10"},
{"pb":"1.6ПБ 63-12-8 ", "m":"1953", "n":"9 132", "col":"10"},
{"pb":"1.6ПБ 62-12-8 ", "m":"1922", "n":"8 986", "col":"10"},
{"pb":"1.6ПБ 61-12-8 ", "m":"1891", "n":"8 841", "col":"10"},
{"pb":"1.6ПБ 60-12-8 ", "m":"1860", "n":"8 521", "col":"10"},
{"pb":"1.6ПБ 59-12-8 ", "m":"1829", "n":"8 379", "col":"10"},
{"pb":"1.6ПБ 58-12-8 ", "m":"1798", "n":"8 236", "col":"11"},
{"pb":"1.6ПБ 57-12-8 ", "m":"1767", "n":"8 094", "col":"11"},
{"pb":"1.6ПБ 56-12-8 ", "m":"1736", "n":"7 951", "col":"11"},
{"pb":"1.6ПБ 55-12-8 ", "m":"1705", "n":"7 809", "col":"11"},
{"pb":"1.6ПБ 54-12-8 ", "m":"1674", "n":"7 666", "col":"11"},
{"pb":"1.6ПБ 53-12-8 ", "m":"1643", "n":"7 524", "col":"12"},
{"pb":"1.6ПБ 52-12-8 ", "m":"1612", "n":"7 381", "col":"12"},
{"pb":"1.6ПБ 51-12-8 ", "m":"1581", "n":"7 239", "col":"12"},
{"pb":"1.6ПБ 50-12-8 ", "m":"1550", "n":"7 096", "col":"12"},
{"pb":"1.6ПБ 49-12-8 ", "m":"1519", "n":"6 954", "col":"13"},
{"pb":"1.6ПБ 48-12-8 ", "m":"1488", "n":"6 603", "col":"13"},
{"pb":"1.6ПБ 47-12-8 ", "m":"1457", "n":"6 367", "col":"13"},
{"pb":"1.6ПБ 46-12-8 ", "m":"1426", "n":"6 231", "col":"14"},
{"pb":"1.6ПБ 45-12-8 ", "m":"1395", "n":"6 095", "col":"14"},
{"pb":"1.6ПБ 44-12-8 ", "m":"1364", "n":"5 959", "col":"14"},
{"pb":"1.6ПБ 43-12-8 ", "m":"1333", "n":"5 823", "col":"15"},
{"pb":"1.6ПБ 42-12-8 ", "m":"1302", "n":"5 507", "col":"15"},
{"pb":"1.6ПБ 41-12-8 ", "m":"1271", "n":"5 375", "col":"15"},
{"pb":"1.6ПБ 40-12-8 ", "m":"1240", "n":"5 243", "col":"16"},
{"pb":"1.6ПБ 39-12-8 ", "m":"1209", "n":"5 112", "col":"16"},
{"pb":"1.6ПБ 38-12-8 ", "m":"1178", "n":"4 980", "col":"17"},
{"pb":"1.6ПБ 37-12-8 ", "m":"1147", "n":"4 848", "col":"17"},
{"pb":"1.6ПБ 36-12-8 ", "m":"1116", "n":"4 716", "col":"18"},
{"pb":"1.6ПБ 35-12-8 ", "m":"1085", "n":"4 585", "col":"18"},
{"pb":"1.6ПБ 34-12-8 ", "m":"1054", "n":"4 453", "col":"19"},
{"pb":"1.6ПБ 33-12-8 ", "m":"1023", "n":"4 321", "col":"19"},
{"pb":"1.6ПБ 32-12-8 ", "m":"992", "n":"4 189", "col":"20"},
{"pb":"1.6ПБ 31-12-8 ", "m":"961", "n":"4 058", "col":"20"},
{"pb":"1.6ПБ 30-12-8 ", "m":"930", "n":"3 926", "col":"21"},
{"pb":"1.6ПБ 29-12-8 ", "m":"899", "n":"3 794", "col":"22"},
{"pb":"1.6ПБ 28-12-8 ", "m":"868", "n":"3 662", "col":"23"},
{"pb":"1.6ПБ 27-12-8 ", "m":"837", "n":"3 531", "col":"24"},
{"pb":"1.6ПБ 26-12-8 ", "m":"806", "n":"3 399", "col":"24"},
{"pb":"1.6ПБ 25-12-8 ", "m":"775", "n":"3 267", "col":"25"},
{"pb":"1.6ПБ 24-12-8 ", "m":"744", "n":"3 136", "col":"27"},
{"pb":"1.6ПБ 23-12-8 ", "m":"713", "n":"3 004", "col":"28"},
{"pb":"1.6ПБ 22-12-8 ", "m":"682", "n":"2 872", "col":"29"},
{"pb":"1.6ПБ 21-12-8 ", "m":"651", "n":"2 740", "col":"30"},
{"pb":"1.6ПБ 20-12-8 ", "m":"620", "n":"2 609", "col":"32"},
{"pb":"1.6ПБ 19-12-8 ", "m":"589", "n":"2 477", "col":"34"},
{"pb":"1.6ПБ 18-12-8 ", "m":"558", "n":"2 345", "col":"36"},
{"pb":"1.6ПБ 17-12-8 ", "m":"527", "n":"2 213", "col":"38"}
	]',true);
?>
	
	