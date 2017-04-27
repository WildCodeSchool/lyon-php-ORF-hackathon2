<?php

/* ::base.html.twig */
class __TwigTemplate_12a9784906875215e0dff72fbea6a70a80828e4aa3365ff25286dac4ee04c2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f8331810240c01378d5b769d800d84346c2a29546ef8b7e31dd911a4c1a038a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8331810240c01378d5b769d800d84346c2a29546ef8b7e31dd911a4c1a038a->enter($__internal_2f8331810240c01378d5b769d800d84346c2a29546ef8b7e31dd911a4c1a038a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_97c8cec44676382b5bc3f0c26e0778406796b849910a9c38070a36b5a5951c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c8cec44676382b5bc3f0c26e0778406796b849910a9c38070a36b5a5951c1e->enter($__internal_97c8cec44676382b5bc3f0c26e0778406796b849910a9c38070a36b5a5951c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/materialize.min.css\"  media=\"screen,projection\"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
</head>
<body>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "</body>
</html>
";
        
        $__internal_2f8331810240c01378d5b769d800d84346c2a29546ef8b7e31dd911a4c1a038a->leave($__internal_2f8331810240c01378d5b769d800d84346c2a29546ef8b7e31dd911a4c1a038a_prof);

        
        $__internal_97c8cec44676382b5bc3f0c26e0778406796b849910a9c38070a36b5a5951c1e->leave($__internal_97c8cec44676382b5bc3f0c26e0778406796b849910a9c38070a36b5a5951c1e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c33bb6b7bf2524afcc4b46a47f71e679642368316fa5ee189996a3cb2041fc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33bb6b7bf2524afcc4b46a47f71e679642368316fa5ee189996a3cb2041fc52->enter($__internal_c33bb6b7bf2524afcc4b46a47f71e679642368316fa5ee189996a3cb2041fc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_209f9afd20e2143824bffcf72ebed17d000deb27bc48db2ba18feb5e33d10cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209f9afd20e2143824bffcf72ebed17d000deb27bc48db2ba18feb5e33d10cf3->enter($__internal_209f9afd20e2143824bffcf72ebed17d000deb27bc48db2ba18feb5e33d10cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_209f9afd20e2143824bffcf72ebed17d000deb27bc48db2ba18feb5e33d10cf3->leave($__internal_209f9afd20e2143824bffcf72ebed17d000deb27bc48db2ba18feb5e33d10cf3_prof);

        
        $__internal_c33bb6b7bf2524afcc4b46a47f71e679642368316fa5ee189996a3cb2041fc52->leave($__internal_c33bb6b7bf2524afcc4b46a47f71e679642368316fa5ee189996a3cb2041fc52_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_846f8930cc8bdb03d1a236ef19f97ba3edd391030b25a972a2474dd619289b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846f8930cc8bdb03d1a236ef19f97ba3edd391030b25a972a2474dd619289b7d->enter($__internal_846f8930cc8bdb03d1a236ef19f97ba3edd391030b25a972a2474dd619289b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42179fcf8cf6e9e3bab58b34b956a214c614d30957849d2ee3ac82b8ad53c30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42179fcf8cf6e9e3bab58b34b956a214c614d30957849d2ee3ac82b8ad53c30b->enter($__internal_42179fcf8cf6e9e3bab58b34b956a214c614d30957849d2ee3ac82b8ad53c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
";
        
        $__internal_42179fcf8cf6e9e3bab58b34b956a214c614d30957849d2ee3ac82b8ad53c30b->leave($__internal_42179fcf8cf6e9e3bab58b34b956a214c614d30957849d2ee3ac82b8ad53c30b_prof);

        
        $__internal_846f8930cc8bdb03d1a236ef19f97ba3edd391030b25a972a2474dd619289b7d->leave($__internal_846f8930cc8bdb03d1a236ef19f97ba3edd391030b25a972a2474dd619289b7d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  74 => 14,  57 => 13,  45 => 19,  43 => 14,  41 => 13,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/materialize.min.css\"  media=\"screen,projection\"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}
    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
{% endblock %}
</body>
</html>
", "::base.html.twig", "/home/wilder/git_repositories/symfony/lyon-php-ORF-hackathon2/app/Resources/views/base.html.twig");
    }
}
