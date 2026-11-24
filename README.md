# School assignments – Docker & Kubernetes

Assignments from a university course on containerization at UKF Nitra (June 2025).
Each folder is one assignment, merged here from its original repository with its commit history.
The notes inside each folder are my original study notes in Slovak.

For my current, larger project see **[k8s-platform-demo](https://github.com/samuel10998/k8s-platform-demo)**
(Helm, Traefik Ingress, RBAC, NetworkPolicy, Argo CD, GitHub Actions).

## Assignments

| # | Folder | Topic | What it covers |
|---|---|---|---|
| 1 | [`01-docker-compose-exam`](01-docker-compose-exam) | Docker Compose | nginx frontend, PHP API backend built from a Dockerfile, PostgreSQL with a named volume, shared bridge network, config from an `.env` file |
| 2 | [`02-k8s-logger-api`](02-k8s-logger-api) | Kubernetes basics | PHP API that logs every request to a file. Namespace, Deployment, NodePort Service, ConfigMap and Secret via `envFrom`, PersistentVolume + PVC, readiness and liveness probes |
| 3 | [`03-k8s-image-uploader`](03-k8s-image-uploader) | Kubernetes storage | Image upload web app storing files on a PersistentVolume. Configuration moved from ConfigMap to Secret, image pushed to Docker Hub |
| 4 | [`04-k8s-init-container`](04-k8s-init-container) | Init containers | An initContainer generates a file on a shared PVC before the main PHP container starts and displays it |

## Tech used

Docker, Docker Compose, Kubernetes (Docker Desktop), kubectl, PHP + Apache, nginx, PostgreSQL

## Running an assignment

Every folder has its own notes with the exact commands. In short:

```bash
# Docker Compose (assignment 1)
cd 01-docker-compose-exam
cp .env.example .env
docker compose up -d --build

# Kubernetes (assignments 2–4)
cd 02-k8s-logger-api
docker build -t php-logger:latest .
kubectl apply -f k8s/
```

The Kubernetes assignments use locally built images (`imagePullPolicy: Never`) and the namespace `exam-samuel`.
Apps are exposed on NodePorts 30081–30083.

> The passwords in these assignments are local demo values only and are not used anywhere else.
