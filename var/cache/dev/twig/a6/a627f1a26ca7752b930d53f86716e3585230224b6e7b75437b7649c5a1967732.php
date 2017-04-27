<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_491d5853a96629e58d52ecc633bb16e5a88480f3bee41d89b781a0d49240981a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e05bbbb6b95b6286754d5d68b11e49f9f75c23150362f72e5a41ddbc8631dd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05bbbb6b95b6286754d5d68b11e49f9f75c23150362f72e5a41ddbc8631dd5c->enter($__internal_e05bbbb6b95b6286754d5d68b11e49f9f75c23150362f72e5a41ddbc8631dd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e5f6adaa4ad104a52b0135084c8e1078a9e95469031e7ea0d372da9181a10857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f6adaa4ad104a52b0135084c8e1078a9e95469031e7ea0d372da9181a10857->enter($__internal_e5f6adaa4ad104a52b0135084c8e1078a9e95469031e7ea0d372da9181a10857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05bbbb6b95b6286754d5d68b11e49f9f75c23150362f72e5a41ddbc8631dd5c->leave($__internal_e05bbbb6b95b6286754d5d68b11e49f9f75c23150362f72e5a41ddbc8631dd5c_prof);

        
        $__internal_e5f6adaa4ad104a52b0135084c8e1078a9e95469031e7ea0d372da9181a10857->leave($__internal_e5f6adaa4ad104a52b0135084c8e1078a9e95469031e7ea0d372da9181a10857_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07d4885407f5256a1c4e1950cb765fe3327d6856a38a54c9a97c80fb0e44449f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d4885407f5256a1c4e1950cb765fe3327d6856a38a54c9a97c80fb0e44449f->enter($__internal_07d4885407f5256a1c4e1950cb765fe3327d6856a38a54c9a97c80fb0e44449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_865b00a35c3aff51768528769bf2c278e4ca2311770cfbee6c18eff1a6f0e9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865b00a35c3aff51768528769bf2c278e4ca2311770cfbee6c18eff1a6f0e9a7->enter($__internal_865b00a35c3aff51768528769bf2c278e4ca2311770cfbee6c18eff1a6f0e9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_865b00a35c3aff51768528769bf2c278e4ca2311770cfbee6c18eff1a6f0e9a7->leave($__internal_865b00a35c3aff51768528769bf2c278e4ca2311770cfbee6c18eff1a6f0e9a7_prof);

        
        $__internal_07d4885407f5256a1c4e1950cb765fe3327d6856a38a54c9a97c80fb0e44449f->leave($__internal_07d4885407f5256a1c4e1950cb765fe3327d6856a38a54c9a97c80fb0e44449f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/topikana/PhpstormProjects/lyon-php-ORF-hackathon2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
