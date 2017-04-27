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
        $__internal_8d7ba75d6feb6f91765a0b5f160f2f279621bb2c4834276f92b2048ce4686df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7ba75d6feb6f91765a0b5f160f2f279621bb2c4834276f92b2048ce4686df8->enter($__internal_8d7ba75d6feb6f91765a0b5f160f2f279621bb2c4834276f92b2048ce4686df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4ab150b5a417113689092097d1cba8b444d534b5775712569cd866d6ef05e059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab150b5a417113689092097d1cba8b444d534b5775712569cd866d6ef05e059->enter($__internal_4ab150b5a417113689092097d1cba8b444d534b5775712569cd866d6ef05e059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_8d7ba75d6feb6f91765a0b5f160f2f279621bb2c4834276f92b2048ce4686df8->leave($__internal_8d7ba75d6feb6f91765a0b5f160f2f279621bb2c4834276f92b2048ce4686df8_prof);

        
        $__internal_4ab150b5a417113689092097d1cba8b444d534b5775712569cd866d6ef05e059->leave($__internal_4ab150b5a417113689092097d1cba8b444d534b5775712569cd866d6ef05e059_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e4eb61ced7e38c671a32e7c2c1f7ce98b6676eb8a6ca26d550f1f220ff00ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e4eb61ced7e38c671a32e7c2c1f7ce98b6676eb8a6ca26d550f1f220ff00ad->enter($__internal_b8e4eb61ced7e38c671a32e7c2c1f7ce98b6676eb8a6ca26d550f1f220ff00ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab306d7d8d37ecac8e07f28cf6f9be1c0a280e1d7596b49c555653dbe3851f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab306d7d8d37ecac8e07f28cf6f9be1c0a280e1d7596b49c555653dbe3851f62->enter($__internal_ab306d7d8d37ecac8e07f28cf6f9be1c0a280e1d7596b49c555653dbe3851f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab306d7d8d37ecac8e07f28cf6f9be1c0a280e1d7596b49c555653dbe3851f62->leave($__internal_ab306d7d8d37ecac8e07f28cf6f9be1c0a280e1d7596b49c555653dbe3851f62_prof);

        
        $__internal_b8e4eb61ced7e38c671a32e7c2c1f7ce98b6676eb8a6ca26d550f1f220ff00ad->leave($__internal_b8e4eb61ced7e38c671a32e7c2c1f7ce98b6676eb8a6ca26d550f1f220ff00ad_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d787e278aa37342b6cafab4457e0326ae95dbc92bf509e279d7d902539666b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d787e278aa37342b6cafab4457e0326ae95dbc92bf509e279d7d902539666b67->enter($__internal_d787e278aa37342b6cafab4457e0326ae95dbc92bf509e279d7d902539666b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8eb74bf042e43110a45704e8a9a51b9c3cfb8650d85111851ee8faab4a7ef733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb74bf042e43110a45704e8a9a51b9c3cfb8650d85111851ee8faab4a7ef733->enter($__internal_8eb74bf042e43110a45704e8a9a51b9c3cfb8650d85111851ee8faab4a7ef733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <!--Import jQuery before materialize.js-->
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
            <script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
        ";
        
        $__internal_8eb74bf042e43110a45704e8a9a51b9c3cfb8650d85111851ee8faab4a7ef733->leave($__internal_8eb74bf042e43110a45704e8a9a51b9c3cfb8650d85111851ee8faab4a7ef733_prof);

        
        $__internal_d787e278aa37342b6cafab4457e0326ae95dbc92bf509e279d7d902539666b67->leave($__internal_d787e278aa37342b6cafab4457e0326ae95dbc92bf509e279d7d902539666b67_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  75 => 14,  58 => 13,  46 => 19,  43 => 14,  41 => 13,  27 => 1,);
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
", "::base.html.twig", "/home/topikana/PhpstormProjects/lyon-php-ORF-hackathon2/app/Resources/views/base.html.twig");
    }
}
