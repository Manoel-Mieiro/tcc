pdflatex main.tex      # gera main.aux
bibtex main            # gera main.bbl a partir de main.aux
pdflatex main.tex      # insere as referências no PDF
pdflatex main.tex      # garante que todas as referências cruzadas fiquem corretas
