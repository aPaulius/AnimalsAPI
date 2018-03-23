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
        $__internal_af3ad6800033b4f2c572527c7e1cf9964eeb06bb985d7f4918f0dd8bd85d0a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3ad6800033b4f2c572527c7e1cf9964eeb06bb985d7f4918f0dd8bd85d0a24->enter($__internal_af3ad6800033b4f2c572527c7e1cf9964eeb06bb985d7f4918f0dd8bd85d0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_76b24fb228b55099ecad79278df50321d6d2539c4582c739f94055a58b1e3231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b24fb228b55099ecad79278df50321d6d2539c4582c739f94055a58b1e3231->enter($__internal_76b24fb228b55099ecad79278df50321d6d2539c4582c739f94055a58b1e3231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3ad6800033b4f2c572527c7e1cf9964eeb06bb985d7f4918f0dd8bd85d0a24->leave($__internal_af3ad6800033b4f2c572527c7e1cf9964eeb06bb985d7f4918f0dd8bd85d0a24_prof);

        
        $__internal_76b24fb228b55099ecad79278df50321d6d2539c4582c739f94055a58b1e3231->leave($__internal_76b24fb228b55099ecad79278df50321d6d2539c4582c739f94055a58b1e3231_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19046406317a0598ee0cc7b1e8a9ed2d131b7fef316a8d1fa1397d0c144d8825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19046406317a0598ee0cc7b1e8a9ed2d131b7fef316a8d1fa1397d0c144d8825->enter($__internal_19046406317a0598ee0cc7b1e8a9ed2d131b7fef316a8d1fa1397d0c144d8825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f7b8bca3ba5bd78ff6a363e54a634fbf55d147845f09a3b706f9b18f79a1fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7b8bca3ba5bd78ff6a363e54a634fbf55d147845f09a3b706f9b18f79a1fcb->enter($__internal_6f7b8bca3ba5bd78ff6a363e54a634fbf55d147845f09a3b706f9b18f79a1fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6f7b8bca3ba5bd78ff6a363e54a634fbf55d147845f09a3b706f9b18f79a1fcb->leave($__internal_6f7b8bca3ba5bd78ff6a363e54a634fbf55d147845f09a3b706f9b18f79a1fcb_prof);

        
        $__internal_19046406317a0598ee0cc7b1e8a9ed2d131b7fef316a8d1fa1397d0c144d8825->leave($__internal_19046406317a0598ee0cc7b1e8a9ed2d131b7fef316a8d1fa1397d0c144d8825_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
