<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_db7f08da791fe11522aba939bc9ea7da04486075f8b148a6b535f9798e54aa3f extends Twig_Template
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
        $__internal_4da43e2e71b7382685f332d7baf1ccae0ecc814daa13bc9cd78b74121b4bda26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da43e2e71b7382685f332d7baf1ccae0ecc814daa13bc9cd78b74121b4bda26->enter($__internal_4da43e2e71b7382685f332d7baf1ccae0ecc814daa13bc9cd78b74121b4bda26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_43c0ce22e22b3c064ff7b48667dd4eea9add547cd8fd2a393efa537c0adf92f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c0ce22e22b3c064ff7b48667dd4eea9add547cd8fd2a393efa537c0adf92f2->enter($__internal_43c0ce22e22b3c064ff7b48667dd4eea9add547cd8fd2a393efa537c0adf92f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4da43e2e71b7382685f332d7baf1ccae0ecc814daa13bc9cd78b74121b4bda26->leave($__internal_4da43e2e71b7382685f332d7baf1ccae0ecc814daa13bc9cd78b74121b4bda26_prof);

        
        $__internal_43c0ce22e22b3c064ff7b48667dd4eea9add547cd8fd2a393efa537c0adf92f2->leave($__internal_43c0ce22e22b3c064ff7b48667dd4eea9add547cd8fd2a393efa537c0adf92f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39025dfc7456cdf68d8dc225e0d10d3a31e3485285b31e41ec3b607094d8d9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39025dfc7456cdf68d8dc225e0d10d3a31e3485285b31e41ec3b607094d8d9cf->enter($__internal_39025dfc7456cdf68d8dc225e0d10d3a31e3485285b31e41ec3b607094d8d9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_968ce1d3449635130f4826fe3b615c850b22bad0b1b3952a16852004bc5924af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968ce1d3449635130f4826fe3b615c850b22bad0b1b3952a16852004bc5924af->enter($__internal_968ce1d3449635130f4826fe3b615c850b22bad0b1b3952a16852004bc5924af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
        
        $__internal_968ce1d3449635130f4826fe3b615c850b22bad0b1b3952a16852004bc5924af->leave($__internal_968ce1d3449635130f4826fe3b615c850b22bad0b1b3952a16852004bc5924af_prof);

        
        $__internal_39025dfc7456cdf68d8dc225e0d10d3a31e3485285b31e41ec3b607094d8d9cf->leave($__internal_39025dfc7456cdf68d8dc225e0d10d3a31e3485285b31e41ec3b607094d8d9cf_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/Users/paulius/Projects/web_services_rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
