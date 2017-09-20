<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1cec2e73f6703f2ee777bea2a830ce55d050f56bfd7489670bbb1c6dc4c6d03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96bc5ee9985c5e92dfd331bbbc2578ca8acfc0f0be3c221e939226d599cae927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bc5ee9985c5e92dfd331bbbc2578ca8acfc0f0be3c221e939226d599cae927->enter($__internal_96bc5ee9985c5e92dfd331bbbc2578ca8acfc0f0be3c221e939226d599cae927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_09f0fca30eab772f0fcc575b3e673bfcac785f82c81f5f008736d55bf47c6149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f0fca30eab772f0fcc575b3e673bfcac785f82c81f5f008736d55bf47c6149->enter($__internal_09f0fca30eab772f0fcc575b3e673bfcac785f82c81f5f008736d55bf47c6149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96bc5ee9985c5e92dfd331bbbc2578ca8acfc0f0be3c221e939226d599cae927->leave($__internal_96bc5ee9985c5e92dfd331bbbc2578ca8acfc0f0be3c221e939226d599cae927_prof);

        
        $__internal_09f0fca30eab772f0fcc575b3e673bfcac785f82c81f5f008736d55bf47c6149->leave($__internal_09f0fca30eab772f0fcc575b3e673bfcac785f82c81f5f008736d55bf47c6149_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2e6ed76c82f8351205e40232eae164b21e64b4d190d7f7e27bd5c1d421f230e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e6ed76c82f8351205e40232eae164b21e64b4d190d7f7e27bd5c1d421f230e->enter($__internal_b2e6ed76c82f8351205e40232eae164b21e64b4d190d7f7e27bd5c1d421f230e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fa7b9892925b5565d2e3824e5b6c240834eec55e941b8ceb13da4172305b989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa7b9892925b5565d2e3824e5b6c240834eec55e941b8ceb13da4172305b989->enter($__internal_1fa7b9892925b5565d2e3824e5b6c240834eec55e941b8ceb13da4172305b989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        // line 8
        echo "
        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        </div>

    ";
        // line 22
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_1fa7b9892925b5565d2e3824e5b6c240834eec55e941b8ceb13da4172305b989->leave($__internal_1fa7b9892925b5565d2e3824e5b6c240834eec55e941b8ceb13da4172305b989_prof);

        
        $__internal_b2e6ed76c82f8351205e40232eae164b21e64b4d190d7f7e27bd5c1d421f230e->leave($__internal_b2e6ed76c82f8351205e40232eae164b21e64b4d190d7f7e27bd5c1d421f230e_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4807d6ab23893d5fc454a27d199e40b73803f0c299d4c7e6df2e9bf558fc6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4807d6ab23893d5fc454a27d199e40b73803f0c299d4c7e6df2e9bf558fc6bd->enter($__internal_b4807d6ab23893d5fc454a27d199e40b73803f0c299d4c7e6df2e9bf558fc6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bcc9184242cc56cb152550242e55b73fce1e4fe885291eda8b037ea35580545d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc9184242cc56cb152550242e55b73fce1e4fe885291eda8b037ea35580545d->enter($__internal_bcc9184242cc56cb152550242e55b73fce1e4fe885291eda8b037ea35580545d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_bcc9184242cc56cb152550242e55b73fce1e4fe885291eda8b037ea35580545d->leave($__internal_bcc9184242cc56cb152550242e55b73fce1e4fe885291eda8b037ea35580545d_prof);

        
        $__internal_b4807d6ab23893d5fc454a27d199e40b73803f0c299d4c7e6df2e9bf558fc6bd->leave($__internal_b4807d6ab23893d5fc454a27d199e40b73803f0c299d4c7e6df2e9bf558fc6bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  105 => 22,  94 => 24,  91 => 22,  86 => 18,  80 => 17,  71 => 14,  66 => 13,  61 => 12,  57 => 11,  52 => 8,  50 => 7,  41 => 6,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# On étend notre layout #}
{% extends \"base.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                {% for key, messages in app.session.flashbag.all() %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ key }}\">
                            {{ message|trans({}, 'FOSUserBundle') }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}


", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
