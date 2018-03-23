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
        $__internal_45118c5beb918ff72fd09ec5077b2bb5eb3b214e5f192c75200e7a136251d75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45118c5beb918ff72fd09ec5077b2bb5eb3b214e5f192c75200e7a136251d75c->enter($__internal_45118c5beb918ff72fd09ec5077b2bb5eb3b214e5f192c75200e7a136251d75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_817f05201ee90809090eaf60ae33a26719cf385505554ea993a65e8c2206a8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817f05201ee90809090eaf60ae33a26719cf385505554ea993a65e8c2206a8f5->enter($__internal_817f05201ee90809090eaf60ae33a26719cf385505554ea993a65e8c2206a8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45118c5beb918ff72fd09ec5077b2bb5eb3b214e5f192c75200e7a136251d75c->leave($__internal_45118c5beb918ff72fd09ec5077b2bb5eb3b214e5f192c75200e7a136251d75c_prof);

        
        $__internal_817f05201ee90809090eaf60ae33a26719cf385505554ea993a65e8c2206a8f5->leave($__internal_817f05201ee90809090eaf60ae33a26719cf385505554ea993a65e8c2206a8f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e08be4d74fe2d4bf48edc299bd62fb592fdb58d1e54caf066c4c035e026c9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e08be4d74fe2d4bf48edc299bd62fb592fdb58d1e54caf066c4c035e026c9b4->enter($__internal_1e08be4d74fe2d4bf48edc299bd62fb592fdb58d1e54caf066c4c035e026c9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f34975b5d27710513906f78f1cd2726b4e9b4f875f414cb6f1f911840408d626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34975b5d27710513906f78f1cd2726b4e9b4f875f414cb6f1f911840408d626->enter($__internal_f34975b5d27710513906f78f1cd2726b4e9b4f875f414cb6f1f911840408d626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f34975b5d27710513906f78f1cd2726b4e9b4f875f414cb6f1f911840408d626->leave($__internal_f34975b5d27710513906f78f1cd2726b4e9b4f875f414cb6f1f911840408d626_prof);

        
        $__internal_1e08be4d74fe2d4bf48edc299bd62fb592fdb58d1e54caf066c4c035e026c9b4->leave($__internal_1e08be4d74fe2d4bf48edc299bd62fb592fdb58d1e54caf066c4c035e026c9b4_prof);

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
