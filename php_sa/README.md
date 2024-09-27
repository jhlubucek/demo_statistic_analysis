# PHPStan & PHP CodeSniffer Docker Image

This Docker image provides a ready-to-use environment for running PHPStan (PHP Static Analysis Tool), PHP CodeSniffer (PHPCS), and PHP Code Beautifier (PHPCBF). It allows you to analyze, check, and automatically fix coding style violations in your PHP projects without needing to install these tools locally.

## Features

- **PHPStan**: Analyze your PHP code for potential issues.
- **PHP CodeSniffer (PHPCS)**: Detect violations of coding standards.
- **PHP Code Beautifier (PHPCBF)**: Automatically fix coding style violations detected by PHPCS.

## Usage

### 1. Build the Docker Image

Before using the Docker image, you need to build it. Navigate to the folder where your `Dockerfile` is located and run:

```bash
docker build -t phpcs-phpstan-image .
```

###  2. Running PHPStan
You can run PHPStan to analyze your PHP code and detect potential issues:

```bash
docker run --rm -v $(pwd):/app phpcs-phpstan-image "phpstan analyse /app/src"
```

- $(pwd):/app mounts your current working directory to /app inside the container.
- Adjust the /app/src path to point to your PHP source code directory.
- You can also pass additional PHPStan options, such as the analysis level:

```bash
docker run --rm -v $(pwd):/app phpcs-phpstan-image "phpstan analyse /app/src --level 7"
```

###  3. Running PHP CodeSniffer (PHPCS)
   To check your code against coding standards with PHPCS, run the following command:

```bash
docker run --rm -v $(pwd):/app phpcs-phpstan-image "phpcs /app/src"
```
This will run the coding style checks on your code located in /app/src.
You can customize the folder path according to your project's structure.
###  4. Running PHP Code Beautifier (PHPCBF)
   To automatically fix coding style violations using PHPCBF, use the following command:

```bash
docker run --rm -v $(pwd):/app phpcs-phpstan-image "phpcbf /app/src"
```
This will apply automatic fixes to any coding standard violations detected in your PHP code.
