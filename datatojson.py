import datetime, xlrd
import simplejson as json

def string_month(number):
    return {
        1: 'Januari',
        2: 'Februari',
        3: 'Maret',
        4: 'April',
        5: 'Mei',
        6: 'Juni',
        7: 'Juli',
        8: 'Agustus',
        9: 'September',
        10: 'Oktober',
        11: 'November',
        12: 'Desember'
    }[number]

filename = "Data ATP 2016.xlsx"

wb = xlrd.open_workbook(filename)
sh = wb.sheet_by_index(1)

tournament_list = {}
tournament_list['ATP250'] = []
tournament_list['ATP500'] = []
tournament_list['Grand Slam'] = []
tournament_list['Masters 1000'] = []

for rownum in range(1, sh.nrows):
    tournament = {}
    row_values = sh.row_values(rownum)
    tournament['name'] = row_values[1]
    a1 = sh.cell_value(rowx=rownum, colx=2)
    cell_as_datetime = datetime.datetime(*xlrd.xldate_as_tuple(a1, wb.datemode))
    tournament['date'] = cell_as_datetime.day
    tournament['month'] = string_month(cell_as_datetime.month)
    tournament['series'] = row_values[3]
    if tournament['series'] == 'Masters Cup': continue
    tournament['court'] = row_values[4]
    tournament['surface'] = row_values[5]
    tournament['best_of'] = row_values[6]
    tournament['winner'] = row_values[7]
    tournament['location'] = row_values[8]
    tournament['country'] = row_values[9]
    tournament['latitude'] = row_values[10]
    tournament['longitude'] = row_values[11]
    if tournament['series'] == 'ATP250':
        tournament_list['ATP250'].append(tournament)
    elif tournament['series'] == 'ATP500':
        tournament_list['ATP500'].append(tournament)
    elif tournament['series'] == 'Grand Slam':
        tournament_list['Grand Slam'].append(tournament)
    elif tournament['series'] == 'Masters 1000':
        tournament_list['Masters 1000'].append(tournament)

j = json.dumps(tournament_list)
with open('data.json', 'w') as f:
    f.write(j)
