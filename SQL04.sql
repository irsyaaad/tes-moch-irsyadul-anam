SELECT * FROM tnilai as a
JOIN tmatakuliah as b on a.KodeMK = b.KodeMK
WHERE a.KodeMK = 'MK-01'