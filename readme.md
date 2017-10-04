
[![Build Status](https://travis-ci.org/paprikaLang/Laravel-package-demo.svg?branch=master)](https://travis-ci.org/paprikaLang/Laravel-package-demo)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/paprikaLang/Laravel-package-demo/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/paprikaLang/Laravel-package-demo/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/paprikaLang/Laravel-package-demo/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/paprikaLang/Laravel-package-demo/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/paprikaLang/Laravel-package-demo/badges/build.png?b=master)](https://scrutinizer-ci.com/g/paprikaLang/Laravel-package-demo/build-status/master)
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

