<?php

/* MAUserBundle:Registration:register.html.twig */
class __TwigTemplate_27837feb3b2471e09871860973fd0dedf50159248cbf3aec9307514e0b2e38ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ac9a62ffdbdaeabbc00c8bfcca5c9db1ce49e7d9b64025eb59a615da72333f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac9a62ffdbdaeabbc00c8bfcca5c9db1ce49e7d9b64025eb59a615da72333f2->enter($__internal_8ac9a62ffdbdaeabbc00c8bfcca5c9db1ce49e7d9b64025eb59a615da72333f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register.html.twig"));

        $__internal_088afecb9986e9cdc8bbc9f206f4071b1d21229b854c9dd49cca68390cfdd24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088afecb9986e9cdc8bbc9f206f4071b1d21229b854c9dd49cca68390cfdd24b->enter($__internal_088afecb9986e9cdc8bbc9f206f4071b1d21229b854c9dd49cca68390cfdd24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac9a62ffdbdaeabbc00c8bfcca5c9db1ce49e7d9b64025eb59a615da72333f2->leave($__internal_8ac9a62ffdbdaeabbc00c8bfcca5c9db1ce49e7d9b64025eb59a615da72333f2_prof);

        
        $__internal_088afecb9986e9cdc8bbc9f206f4071b1d21229b854c9dd49cca68390cfdd24b->leave($__internal_088afecb9986e9cdc8bbc9f206f4071b1d21229b854c9dd49cca68390cfdd24b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cec97137f05e94577d01b87a2c24fafe4fbe0b1244492c8b2c5f9bca3b9b4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cec97137f05e94577d01b87a2c24fafe4fbe0b1244492c8b2c5f9bca3b9b4e9->enter($__internal_9cec97137f05e94577d01b87a2c24fafe4fbe0b1244492c8b2c5f9bca3b9b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1243e58d37851cf35fd65395c1cd4b1a956d01cd0f8da376027c3398b772e926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1243e58d37851cf35fd65395c1cd4b1a956d01cd0f8da376027c3398b772e926->enter($__internal_1243e58d37851cf35fd65395c1cd4b1a956d01cd0f8da376027c3398b772e926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "MAUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1243e58d37851cf35fd65395c1cd4b1a956d01cd0f8da376027c3398b772e926->leave($__internal_1243e58d37851cf35fd65395c1cd4b1a956d01cd0f8da376027c3398b772e926_prof);

        
        $__internal_9cec97137f05e94577d01b87a2c24fafe4fbe0b1244492c8b2c5f9bca3b9b4e9->leave($__internal_9cec97137f05e94577d01b87a2c24fafe4fbe0b1244492c8b2c5f9bca3b9b4e9_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
