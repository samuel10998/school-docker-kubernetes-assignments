Zadanie: Aplikácia s InitContainer, ktorý vytvára súbor zo šablóny

1. InitContainer vytvorí súbor zo šablóny a uloží ho do persistentného volume.
2. Hlavný kontajner načíta a zobrazí obsah tohto súboru.

Prikazy:
1. docker build -t php-template:latest .
2. kubectl apply -f k8s/namespace.yaml
3. kubectl apply -f k8s/pv.yaml
4. kubectl apply -f k8s/pvc.yaml
5. kubectl apply -f k8s/deployment.yaml
6. kubectl apply -f k8s/service.yaml

Ak upravíš Dockerfile:
1. docker build -t php-template:latest .
2. kubectl delete pod -n exam-samuel -l app=template

Testovanie:
http://localhost:30083

Malo by sa ukazat:
Vygenerovaný súbor:
1. Toto je vygenerovaný súbor z InitContaineru.

Zhrnutie:
1. Súbor	Úloha
2. index.php	Zobrazuje obsah súboru vytvoreného InitContainerom
3. Dockerfile	Vytvára PHP image
4. entrypoint.sh	Generuje súbor zo šablóny (InitContainer)
5. namespace.yaml	Vytvára namespace
6. pv.yaml / pvc.yaml	Perzistentné úložisko
7. deployment.yaml	Definuje InitContainer + hlavný kontajner
8. service.yaml	Sprístupňuje aplikáciu na localhost:30083
