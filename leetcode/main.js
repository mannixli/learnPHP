function QuickSortBusiList(busiList, start, end) {
    if (start>=end) return;
    let sentinel = busiList[start];
    let i = start + 1;
    let j = end;
    while (i < j) {
        while (busiList[i]['count'] <= sentinel['count']) {
            i++;
        }
        while (busiList[j]['count'] >= sentinel['count']) {
            j--;
        }
        if (i < j) {
            let tmp = busiList[i];
            busiList[i] = busiList[j];
            busiList[j] = tmp;
            i++;
            j--;
        }
    }
    if (sentinel['count']>busiList[j]['count']){
        busiList[start] = busiList[j];
        busiList[j] = sentinel;
    }

    QuickSortBusiList(busiList, start, j - 1);
    QuickSortBusiList(busiList, j + 1, end);
}

var busiList = [{'count': 6, 'id': 0}, {'count': 1, 'id': 1}];
// , {'count': 2, 'id': 2}, {'count': 7, 'id': 3}, {
//     'count': 9,
//     'id': 4
// }, {'count': 3, 'id': 5}, {'count': 4, 'id': 6}, {'count': 5, 'id': 7}, {'count': 10, 'id': 8}, {'count': 8, 'id': 9}];

// QuickSortBusiList(busiList, 0, busiList.length - 1);
var s = new Set();
s.add(1);
s.add(3);
console.log('wo '+Array.from(s));