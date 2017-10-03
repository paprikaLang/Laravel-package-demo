
[![Build Status](https://travis-ci.org/paprikaLang/Laravel-package-demo.svg?branch=master)](https://travis-ci.org/paprikaLang/Laravel-package-demo)

## 开发Laravel扩展

### 用法

```
composer require paprika/hasher
```

在项目的'app/config.php'配置'provider':

```
//Illuminate\Hashing\HashServiceProvider::class,
\Paprika\Hasher\MD5HasherProvider::class,
```

