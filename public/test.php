Swagger: "2.0"
info:
  description: "Ceci est un exemple Swagger"
  version: "1.0.0"
  title: "Exemple Swagger"
  termsOfService: "http://Swagger.io/terms/"
basePath: "/v2"
tags:
- name: "Exemple"
  description: "Exemples pour Swagger"
  externalDocs:
    description: "En savoir plus"
    url: "http://example.org"
schemes:
- "https"
- "http"
paths:
  /Exemple:
  /Exemple/Contenu:
    get:
      tags:
      - "Exemple"
      summary: "Interroger un élément d’exemple"
      produces:
      - "application/json"
      parameters: []
      responses:
        "200":
          description: "successful operation"
          schema:
            type: "object"
            additionalProperties:
              type: "integer"
              format: "int32"
      security:
      - api_key: []